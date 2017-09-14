<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sybace\Countries\Models\Country;
use Sybace\Countries\Models\CountryTrans;
use Sybace\Countries\Models\Area;
use Sybace\Countries\Models\AreaTrans;
use Sybace\Ads\Models\CarCompany;
use Sybace\Ads\Models\CarCompanyTrans;
use Sybace\Ads\Models\CarType;
use Sybace\Ads\Models\CarTypeTrans;
use Sybace\Ads\Models\CarModel;
use Sybace\Users\Models\User;
use Sybace\Users\Models\UserRole;
use Sybace\Media\Models\Media;
use Sybace\Settings\Controllers\SmsController;
use Auth;
use Lang;
use Sybace\Media\Controllers\MediaApiController as MediaAPI;
use Sybace\Messages\Models\Message;
use Sybace\Messages\Models\MessageReply;
use Sybace\Users\Controllers\UsersApiController as API;
use Sybace\Settings\Models\Setting;
use Config;
use Mail;
use Sybace\Ads\Models\Section;
use Sybace\Ads\Controllers\AdsApiController as AdsAPI;
use Sybace\Ads\Models\Ad;
use Validator;
use DB;

class ImsController extends Controller {

    public function __construct() {
        $this->api = new API;
    }

    public function index(Request $request) {
        $this->redirectWhenInactive();
        $user_id = Auth::user()->id;
//        $all_msgs = Message::where('user_id',$user_id)
        $all_msgs = DB::table('messages')
                ->select('messages.*', 'users.name as name', 'users.email as email', 'users.phone as phone','users.email_show','users.phone_show')
                ->join('users', 'users.id', '=', 'messages.from_id')
                ->where('messages.user_id', $user_id)
                ->where('messages.deletedby_receiver', '0')
                ->get();
//                dd($all_msgs);
        return view('website.ims.inbox', array('all_msgs' => $all_msgs));
    }

    public function sendMsg($id) {
        $this->redirectWhenInactive();
        if (isset(Auth::user()->id) == '') {
            \Session::flash('alert-class', 'alert-danger');
            \Session::flash('message', 'الرجاء تسجيل الدخول للمتابعة');
            return back();
        }
        $user_info = User::find($id);
        return view('website.ims.send', array('user_info' => $user_info));
    }

    public function createMsg(Request $request, $id) {
        $this->redirectWhenInactive();
        $logged_userid = Auth::user()->id;
        if ($id != '') {
            $user_info = User::find($request->user_id);
//        dd($request);
            $message = new Message;
            $message->user_id = null;
            if ($request->user_id) {
                $message->user_id = $request->user_id;
            }
            $message->from_id = $logged_userid;
            $message->name = $user_info->name;
            $message->phone = $user_info->phone;
            $message->email = $user_info->email;
            $message->subject = $request->subject;
            $message->message = $request->message;
            $message->save();

            \Session::flash('alert-class', 'alert-success');
            \Session::flash('message', 'تم إرسال الرسالة بنجاح');
            return back();
        } else {
            return back();
        }
    }

    //delete msg
    public function deleteMsg(Request $request, $id) {
        $this->redirectWhenInactive();
        if ($id != '') {
            MessageReply::where('message_id', $id)->delete();
            Message::where('id', $id)->delete();
            return back();
        }
    }

    public function deleteSentMsg($msg_id = "") {
        $this->redirectWhenInactive();
        if (isset(Auth::user()->id)) {
            $msg = Message::where('id', $msg_id)->first();
            $msg->deletedby_sender = '1';
            $msg->save();
            \Session::flash('alert-class', 'alert-success');
            \Session::flash('message', 'تم حذف الرسالة بنجاح');
            return back();
        } else {
            redirect('/');
        }
    }
    
    
      public function deleteInboxMsg($msg_id = "") {
          $this->redirectWhenInactive();
        if (isset(Auth::user()->id)) {
            $msg = Message::where('id', $msg_id)->first();
            $msg->deletedby_receiver = '1';
            $msg->save();
            \Session::flash('alert-class', 'alert-success');
            \Session::flash('message', 'تم حذف الرسالة بنجاح');
            return back();
        } else {
            redirect('/');
        }
    }

    public function replyMsg(Request $request, $id) {
        $this->redirectWhenInactive();
        $logged_userid = Auth::user()->id;
        $msg_info = DB::table('messages')
                ->select('messages.*', 'users.name as name', 'users.email as email', 'users.phone as phone')
                ->join('users', 'users.id', '=', 'messages.from_id')
                ->where('messages.id', $id)
                ->first();
//        dd($msg_info);
        return view('website.ims.reply', array('msg_info' => $msg_info));
    }

    public function setMailSettings() {
        Config::set('mail.driver', Setting::find(5)->value);
        Config::set('mail.host', Setting::find(6)->value);
        Config::set('mail.port', Setting::find(7)->value);
        Config::set('mail.username', Setting::find(8)->value);
        Config::set('mail.password', Setting::find(9)->value);
        Config::set('mail.from.address', Setting::find(10)->value);
        Config::set('mail.from.name', Setting::find(11)->value);
        Config::set('mail.encryption', Setting::find(12)->value);
    }

    public function sendReplyMsg(Request $request, $id) {
        $this->redirectWhenInactive();
        $name = Setting::find(1)->value;
        $email = Setting::find(3)->value;
        $message = Message::find($id);
        $this->setMailSettings();
        try {
            Mail::send('emails.message', ['request' => $request, 'message' => $message], function ($msg) use($message, $name, $email) {
                $msg->from($email, $name);
                $msg->to($message->email);
                $msg->subject('Re:' . $message->subject);
            });
        } catch (\Exception $e) {
            
        }

        $messageReply = new MessageReply;
        $messageReply->message_id = $id;
        $messageReply->message = $request->reply_message;
        if (Auth::check()) {
            $messageReply->user_id = Auth::user()->id;
        } else {
            $messageReply->user_id = $request->user_id;
        }
        $messageReply->save();

        $message->replied = '1';
        $message->save();

        \Session::flash('alert-class', 'alert-success');
        \Session::flash('message', 'تم الرد بنجاح');
        return redirect(Lang::getlocale() . "/" . 'inbox');
    }

    public function sentBox() {
        $this->redirectWhenInactive();
        $user_id = Auth::user()->id;
//        $all_msgs = Message::where('user_id',$user_id)
        $all_msgs = DB::table('messages')
                ->select('messages.*', 'users.name as name', 'users.email as email', 'users.phone as phone','users.email_show','users.phone_show')
                ->join('users', 'users.id', '=', 'messages.user_id')
                ->where('messages.from_id', $user_id)
                ->where('messages.deletedby_sender', '0')
                ->get();
//                dd($all_msgs);
        return view('website.ims.sent-box', array('all_msgs' => $all_msgs));
    }

    public function show(Request $request, $id) {
        $this->redirectWhenInactive();
        $item = Message::findOrFail($id);
        return view('Messages::messages.show', compact('item', 'users'));
    }

    public function viewMsg(Request $request, $id) {
        $this->redirectWhenInactive();
        $user_id = Auth::user()->id;
//        $all_msgs = Message::where('user_id',$user_id)
        $item = Message::findOrFail($id);
        $message = DB::table('messages')
          ->select('messages.*','u1.id as receiver_id','u1.name as name','u1.email as email','u1.phone as phone','u1.email_show as receiver_email_show','u1.phone_show as receiver_phone_show','u2.id as sender_id','u2.name as from_name','u2.email as from_email','u2.phone as from_phone','u2.email_show as sender_email_show','u2.phone_show as sender_phone_show')
          ->join('users as u1', 'u1.id', '=', 'messages.user_id')
          ->join('users as u2', 'u2.id', '=', 'messages.from_id')
          ->where('messages.id',$id)
          ->get();
//                dd($item);
//        return view('website.ims.show',array('all_msgs'=>$item));
//        dd($message);
        return view('website.ims.show', compact('item', 'message','user_id'));
    }
      public function redirectWhenInactive() {

        if (Auth::user()) {
            if (Auth::user()->active == 0) {
                Auth::logout();
                \Session::flash('alert-class', 'alert-danger');
                \Session::flash('message', "حسابك غير نشط يرجى الاتصال بمشرف موقع الويب ");
                return redirect('/');
            } else {
                return 0;
            }
        } else {
            \Session::flash('alert-class', 'alert-danger');
            \Session::flash('message', 'الرجاء تسجيل الدخول للمتابعة');
            return redirect('/');
        }
    }

}
