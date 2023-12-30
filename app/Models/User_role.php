<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    protected $fillable = [
        'role', 'status'

    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
