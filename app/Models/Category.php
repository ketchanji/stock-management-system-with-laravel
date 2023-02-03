<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'category_name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_category', 'id');
    }
}
