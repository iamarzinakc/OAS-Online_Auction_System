<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
   
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
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    
    protected $fillable = [
         'name', 'status'

    ];
}
