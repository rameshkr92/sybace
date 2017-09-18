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
use Sybace\Pages\Models\Page;
use Sybace\Pages\Models\PageTrans;
use Sybace\Settings\Controllers\SmsController;
use Auth;
use Lang;
use Sybace\Media\Controllers\MediaApiController as MediaAPI;
use Sybace\Users\Controllers\UsersApiController as API;
use Sybace\Settings\Models\Setting;
use Config;
use Mail;
use Sybace\Ads\Models\Section;
use Sybace\Ads\Controllers\AdsApiController as AdsAPI;
use Sybace\Ads\Models\Ad;
use Validator;

class CmsController extends Controller {

    public function __construct() {
        $this->api = new API;
    }

    /**
     * Overide Defualt Mail Settings.
     *
     * @return Response
     */
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

    /**
     * Show page
     *
     * @var view
     */
    public function showPage(Request $request, $page) {
//        $item = Page::findOrFail($page);
//        $item = Page::where(array('page_url'=> $page, 'published'=>'1'))->first();
        $item = Page::where(array('page_url'=> $page, 'published'=>'1'))->first();
        if(count($item) == null){
            return redirect('/');
        }
        $trans = PageTrans::where('page_id', $item->id)->get()->keyBy('lang')->toArray();
        $webmeta['title'] = $item->trans->title;
        $webmeta['keywords'] = $item->trans->title;
        $webmeta['description'] = $item->trans->title;
        return view('website.pages.show', compact('webmeta','item', 'trans'));
//        return view('website.pages.show');
    }

}
