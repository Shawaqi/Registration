<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentform extends Model
{
    use HasFactory;
    protected $table = 'studentform';
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

    public function user()
    {
        // return $this->belongsTo(User::class);
    }
}

