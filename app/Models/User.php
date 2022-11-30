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

        'fname2',
        'mname2',
        'sname2',
        'ic2',
        'passport2',
        'birthday2',
        'phone2',
        'altphone2',
        'gender2',
        'races2',
        'faddress',
        'saddress',
        'state2',
        'relationship2',
    ];

    public function student()
    {
        // return $this->hasMany(studentform::class);
    }

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
