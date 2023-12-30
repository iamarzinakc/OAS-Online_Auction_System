<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }   
    public function category()
    {
        return $this->hasMany(Category::class);
    }
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    
    protected $fillable = [
        'type_id', 'name', 'status'

    ];
}
