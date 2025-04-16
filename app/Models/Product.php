<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'products'; 
    
    protected $fillable = [
        'name',
        'description',
        'sku',
        'barcode',
        'category_id',
        'brand',
        'unit',
        'price',
        'cost_price',
        'quantity',
        'weight',
        'color',
        'size',
        'serial_number',
        'tags',
        'reorder_level',
        'created_by',
        'updated_by',
        'published_at',
        'image',
        'status',
    ];

    // Relationship with Category (optional, if you have a categories table)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship with Buys
    // public function buys()
    // {
    //     return $this->hasMany(Buy::class);
    // }

    // // Relationship with Sales
    // public function sales()
    // {
    //     return $this->hasMany(Sale::class);
    // }

    // Stock available (custom accessor)
    // public function getStockAttribute()
    // {
    //     $bought = $this->buys()->sum('quantity');
    //     $sold = $this->sales()->sum('quantity');
    //     return $bought - $sold;
    // }

    //Image URL (custom accessor)
    // public function getImageUrlAttribute()
    // {
    //     return $this->image ? asset('storage/' . $this->image) : asset('images/default-product.png');
    // }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    // Optional: shortcut to get main image
    public function mainImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }
}
