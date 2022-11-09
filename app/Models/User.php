<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'mname',
        'sname',
        'ic',
        'passport',
        'birthday',
        'email',
        'phone',
        'altphone',
        'gender',
        'races',
        'address1',
        'address2',
        'state',
        'consent',
        'gaji',
        'relationship',

        'fp_name2',
        'sp_name2',
        'tp_name2',
        'p_ic2',
        'passport2',
        'pdob2',
        'p_email2',
        'p_phone2',
        'pa_phone2',
        'p_gender2',
        'p_races2',
        'p_address12',
        'p_address22',
        'p_state2',
        'relationship2',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
