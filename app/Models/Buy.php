<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buy extends Model
{
    use HasFactory,SoftDeletes;
     protected $fillable = [
        'product_id',
        'quantity',
        'buy_price',
        'buyer_name',
        'buyer_mobile',
        'buyer_address',
        'buyer_comment',
        'id_proof',
    ];

    /**
     * Relation: Buy belongs to Product
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
