<?php

namespace Sybace\Users\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permission_role';

    /**
     * role relation.
     *
     * 
     */
    public function role()
    {
        return $this->belongsTo('Sybace\Users\Models\Permission', 'permission_id');
    }

    public function getPermission()
    {
        return $this->belongsTo('Sybace\Users\Models\Permission','permission_id');
    }
}
