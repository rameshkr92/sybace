<?php

namespace Sybace\Blogs\Models;

use Illuminate\Database\Eloquent\Model;
use Lang;

class BlogTrans extends Model
{
    protected $table = 'blogs_trans';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    
    
    public function comments()
	{
		return $this->hasMany('\Sybace\Blogs\Models\CommentTrans','post_id','comment_id')->where('lang', Lang::getlocale())->select("*");
	}
    
    public function post()
    {   
        return $this->belongsTo('Sybace\Blogs\Models\Blogs', 'post_id');//->select(['id', 'name']);
    
    }

}
