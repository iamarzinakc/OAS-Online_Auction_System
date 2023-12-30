<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_role_id',
        'name',
        'email',
        'password',
        'profile',
        'phone',
        'front_image',
        'back_image',
        'per_address',
        'temp_address',
        'occupation',
        'gender',
        'parentName',
        'grandParentName',
        'documentNo',
        'issueDate',
    ];

    public function user_role()
    {
        return $this->belongsTo(User_role::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
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
