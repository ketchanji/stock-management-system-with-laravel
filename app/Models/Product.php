<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name', 
        'product_image',
        'product_category',
        'product_status',
        'product_price',
        'product_quantity'
        ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
