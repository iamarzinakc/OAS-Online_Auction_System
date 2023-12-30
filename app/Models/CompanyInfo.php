<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $fillable = [
        'image', 'name', 'email','address', 'phone_no', 'mobile_no', 'support_no', 'pan_vat_no', 'description'

    ];
}
