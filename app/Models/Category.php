<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'photo', 'slug'];

    protected $hidden = [];

    public function Product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
