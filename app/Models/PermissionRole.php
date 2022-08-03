<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    use HasFactory;

    protected $fillable = ['id','permission_id','role_id','created_by','created_at','updated_at'];

    public function role() {
        return $this->belongsTo(\App\Models\Role::class, 'role_id', 'id');
    }

    public function permission() {
        return $this->belongsTo(\App\Models\Permission::class, 'permission_id', 'id');
    }

}
