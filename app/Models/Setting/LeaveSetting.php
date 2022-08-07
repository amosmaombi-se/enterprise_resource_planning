<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveSetting extends Model
{
    use HasFactory;

    protected $table = 'leave_reasons';
    
    protected $fillable = ['id', 'uuid', 'name', 'period'];
}
