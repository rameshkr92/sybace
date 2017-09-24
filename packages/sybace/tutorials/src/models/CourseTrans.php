<?php

namespace Sybace\Tutorials\Models;

use Illuminate\Database\Eloquent\Model;
use Lang;

class CourseTrans extends Model
{
    protected $table = 'courses_trans';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */


//    public function contactus()
//	{
//		return $this->hasMany('\Sybace\Tutorials\Models\TutorialsTrans','contact_section_id','section_id')->where('lang', Lang::getlocale())->select("*");
//	}

//    public function section()
//    {
//        return $this->belongsTo('Sybace\Tutorials\Models\CommentTrans', 'section_id');
//
//    }

}
