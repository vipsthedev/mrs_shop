<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'category_id',
        'brand',
        'description',
        'supplier',
        'status',
        'warranty_period',
        'purchase_date',
        'quantity',
        'restock_quantity',
        'purchase_cost',
        'selling_price',
        'discount',
        'supplier_contact',
        'location',
        'is_active'
    ];

    // Define Relationship
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
