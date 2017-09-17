<?php

namespace Sybace\Blogs\Models;

use Illuminate\Database\Eloquent\Model;
use Lang;

class CommentTrans extends Model
{
    protected $table = 'comments_trans';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    
    
    public function contactus()
	{
		return $this->hasMany('\Sybace\Blogs\Models\BlogsTrans','contact_section_id','section_id')->where('lang', Lang::getlocale())->select("*");
	}
    
    public function section()
    {   
        return $this->belongsTo('Sybace\Blogs\Models\CommentTrans', 'section_id');
    
    }

}
