<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
     use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'quantity',
        'sale_price',
        'sales_name',
        'sales_mobile',
        'sales_address',
        'sales_comment',
        'id_proof',
    ];

    /**
     * Relation: Sale belongs to Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Accessor for ID Proof URL
     */
    public function getIdProofUrlAttribute()
    {
        return $this->id_proof ? asset('storage/' . $this->id_proof) : null;
    }
}
