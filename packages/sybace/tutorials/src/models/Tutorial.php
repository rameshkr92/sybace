<?php

namespace Sybace\Tutorials\Models;

use Illuminate\Database\Eloquent\Model;
use Lang;

class Tutorial extends Model
{
    protected $table = 'comments';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = ['category', 'section', 'options', 'created_by', 'updated_by'];
//
    protected $with = ['trans', 'commentedBy'];
    
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];

    /**
     * Translation relation.
     *
     * 
     */
    public function trans()
    {
        return $this->hasOne('\Sybace\Tutorials\Models\TutorialTrans', 'comment_id')->where('lang', Lang::getlocale())->select("*");
    }
    /**
     * Author relation.
     */
    public function commentedBy()
    {
        return $this->belongsTo('Sybace\Users\Models\User', 'from_user')->select(['id', 'name']);
    }

    public function scopeFilterStatus($query)
    {
        $getStatus = '';
        //dd($_GET['status']);
        if(isset($_GET['status']) && !empty($_GET['status'])){
            $getStatus = $_GET['status'];
            if($getStatus == 2){
                $getStatus = false;
            }
            return $query->where('active', $getStatus);
        }
    }

}