<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
    use HasFactory;
    protected $fillable =
      [
        'fullname',
        'email',
        'birthday',
        'address',
        'postal',
        'state',
        'city',
        'school',
        'phone',
        'cate',
        'nric'
    ];
}
