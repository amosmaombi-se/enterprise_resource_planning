<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    use HasFactory;


    protected $fillable = [
        'id','name', 'description'
    ];

    public function permissions() {
        return $this->hasMany(\App\Models\Permission::class,'permission_group_id','id');
    }
}
