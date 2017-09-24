<?php

namespace Sybace\Tutorials\Models;

use Illuminate\Database\Eloquent\Model;
use Lang;

class TutorialCategoryTrans extends Model
{
    protected $table = 'tutorials_trans';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    
    
    public function comments()
	{
		return $this->hasMany('\Sybace\Tutorials\Models\CommentTrans','post_id','comment_id')->where('lang', Lang::getlocale())->select("*");
	}
    
    public function post()
    {   
        return $this->belongsTo('Sybace\Tutorials\Models\Tutorials', 'post_id');//->select(['id', 'name']);
    
    }

}
