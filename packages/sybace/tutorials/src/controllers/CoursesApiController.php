<?php
namespace Sybace\Tutorials\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sybace\Tutorials\Models\Course;
use Sybace\Tutorials\Models\CourseTrans;
use Auth;
use Lang;
use Sybace\Settings\Models\Setting;
use Validator;
use Illuminate\Support\Facades\URL;
use Config;
use Illuminate\Support\Facades\Mail;

class CoursesApiController extends Controller
{
    /*
   |--------------------------------------------------------------------------
   | Sybace Courses API Controller
   |--------------------------------------------------------------------------
   |
   */

    /**
     *
     *
     * @param
     * @return
     */
    public function validatation($request)
    {
        $languages = config('sybace.locales');
        $rules['slug'] = 'unique:tutorials';
        $rules = [];
        if(count($languages)) {
            foreach ($languages as $key => $language) {
                $code = $language['code'];
                if($request->language){
                    foreach($request->language as $lang){
                        $rules['name_'.$code.''] = 'required|max:100';
                        $rules['short_desc_'.$code.''] = 'required|max:500';
                        $rules['description_'.$code.''] = 'required';
                    }
                }
            }
        }
        return \Validator::make($request->all(), $rules);
    }

    /**
     *list item
     */
    public function listItems(Request $request)
    {
        $contactrequest = Course::FilterStatus()->orderBy('id', 'DESC')->paginate($request->get('paginate'));
        return $contactrequest;
    }
    /**
     * @param
     * @return
     */
    public function storeCourse(Request $request)
    {
        $validator = $this->validatation($request);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $ar_name = CourseTrans::where('name', ucfirst(strtolower($request->name_ar)))->first();
        $en_name = CourseTrans::where('name', ucfirst(strtolower($request->name_en)))->first();

        if (isset($ar_name->name) || isset($en_name->name)) {
            $response = ['alert-class'=>'alert-danger','message' => trans('Tutorials::tutorials.duplicate_section_msg')];
            return response()->json($response, 201);
        }

        $courses = new Course();
        if ($request->author) {
            $author = $request->author;
        } else {
            $author = Auth::user()->id;
        }

        $courses->created_by = $author;
        $courses->updated_by = $author;
        $courses->active = false;
        if ($request->active) {
            $courses->active = true;
        }
        $courses->slug = $this->seoUrl($request->name_en);
        $courses->save();

        // Translation
        foreach ($request->language as $langCode) {
            $name = 'name_' . $langCode;
            $short_desc = 'short_desc_' . $langCode;
            $body = 'description_' . $langCode;
            $seo_title = 'seo_title_'.$langCode;
            $meta_keywords = 'meta_keywords_'.$langCode;
            $meta_description = 'meta_description_'.$langCode;
            $tutorialTrans = new CourseTrans;
            $tutorialTrans->course_id = $courses->id;
            $tutorialTrans->name = ucwords(strtolower($request->$name));
            $tutorialTrans->short_desc = $request->$short_desc;
            $tutorialTrans->description = $request->$body;
            $tutorialTrans->seo_title = $request->$seo_title;
            $tutorialTrans->meta_keywords = $request->$meta_keywords;
            $tutorialTrans->meta_description = $request->$meta_description;
            $tutorialTrans->lang = $langCode;
            $tutorialTrans->save();
        }

        $response = ['message' => trans('Tutorials::tutorials.saved_successfully')];
        return response()->json($response, 201);
    }
// Get SEO URL function here
    function seoUrl($string) {
        //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
        $string = strtolower($string);
        //Strip any unwanted characters
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
    public function updateCourse(Request $request, $apiKey = '', $id) {
        $validator = $this->validatation($request);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $tutorial = Course::find($id);
        if ($request->author) {
            $author = $request->author;
        } else {
            $author = Auth::user()->id;
        }
        $tutorial->updated_by = $author;
        $tutorial->active = false;
        if ($request->active) {
            $tutorial->active = true;
        }
        $tutorial->slug = $this->seoUrl($request->name_en);
        $tutorial->save();
        // Translation
        foreach ($request->language as $langCode) {
            $name = 'name_' . $langCode;
            $body = 'description_' . $langCode;
            $seo_title = 'seo_title_'.$langCode;
            $meta_keywords = 'meta_keywords_'.$langCode;
            $meta_description = 'meta_description_'.$langCode;
            $tutorialTrans = CourseTrans::where('course_id', $tutorial->id)->where('lang', $langCode)->first();
            if (empty($tutorialTrans)) {
                $tutorialTrans = new CourseTrans;
                $tutorialTrans->course_id = $tutorial->id;
                $tutorialTrans->lang = $langCode;
            }
            $tutorialTrans->name = ucwords(strtolower($request->$name));
            $tutorialTrans->description = $request->$body;
            $tutorialTrans->seo_title = $request->$seo_title;
            $tutorialTrans->meta_keywords = $request->$meta_keywords;
            $tutorialTrans->meta_description = $request->$meta_description;
            $tutorialTrans->save();
        }

        $response = ['message' => trans('Tutorials::tutorials.updated_successfully')];
        return response()->json($response, 201);
    }

    public function postReply(Request $request, $id) {
        $contact_request = CourseTrans::where('contact_id', $id)->first();
        if ($contact_request) {
            // validate request
            $data = $request->all();
            $validate_response = Validator::make($data, array(
                'email' => 'required|email',
                //                        'subject' => 'required',
                'message' => 'required',
            ));

            if ($validate_response->fails()) {
                return redirect(URL::previous())->withErrors($validate_response)->withInput();
            } else {
                $arr_request_data = array();

                CourseTrans::where('contact_id', $id)->update(array('is_reply'=>'1'));

                $obj=new CourseReplyTrans();
                $obj->reply_email = $request->email;

                $obj->reply_subject = '';
                $obj->from_user_id = Auth::user()->id;
                $obj->reply_message = $request->message;
                $obj->contact_request_id = $id;
                $obj->lang= Lang::getlocale();
                $obj->save();

                // Send email
                $name = Setting::find(1)->value;
                $email = Setting::find(3)->value;

                $this->setMailSettings();
                $arr_keyword_values = array();
                $arr_keyword_values['userName'] = $contact_request->store_name;
                $arr_keyword_values['messageContent'] = $request->message;
//                dd($arr_keyword_values);
                /*try {
                    Mail::send('emails.contact-request-reply', $arr_keyword_values, function ($msg) use ($request,  $contact_request,$name,$email) {
                        $msg->from($email, $name);
                        $msg->to($contact_request->contact_email);
                        $msg->subject(trans('Courses::tutorials.admin_reply'));
                    });
                } catch (\Exception $e) {
                    dd($e);
                }*/
                $emailtemplateAdmin = EmailTemplateTrans::where(array('template_key'=> 'admin-contacted', 'lang'=>Lang::getlocale()))->first();
                try {
                    Mail::send('emails.admin-contacted'.'-'.Lang::getlocale(), $arr_keyword_values, function ($msg) use ($request, $contact_request, $name,$email, $emailtemplateAdmin) {
                        $msg->from($email, $name);
                        $msg->to($contact_request->contact_email);
                        $msg->subject($emailtemplateAdmin->subject);
                    });
                } catch (\Exception $e) {
                    dd($e->getMessage());
                }
                \Session::flash('alert-class', 'alert-success');
                \Session::flash('message', trans('Tutorials::tutorials.reply_post_msg'));
                return redirect(URL::previous())->with('status', 'Reply posted successfully!');
            }
        } else {
            return redirect(URL::previous());
        }
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

}