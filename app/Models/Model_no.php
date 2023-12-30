<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_no extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function brand()
    {
        return $this->hasMany(Brand::class);
    }
    public function category()
    {
        return $this->hasMany(Category::class);
    }
    public function model_no()
    {
        return $this->hasMany(Model_no::class);
    }
    protected $fillable = [
        'type_id', 'name', 'status'

    ];
}
