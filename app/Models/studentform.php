<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentform extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fname',
        'mname',
        'sname',
        'races',
        'gender',
        'ic',
        'phone',
        'birthday',
        'email',
        'state',
        'ppd',
        'school',
    ];
}
