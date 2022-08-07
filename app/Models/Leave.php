<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    
    protected $table = 'leave';
    protected $fillable = ['id', 'uuid', 'user_id', 'start_date','end_date','number_of_days','reason_id','description',
    'created_by','created_at'];

    public function user() {
        return $this->belongsTo(\App\Models\User::class);
    }
}
