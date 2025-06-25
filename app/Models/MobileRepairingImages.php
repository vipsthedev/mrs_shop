<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MobileRepairingImages extends Model
{
    use HasFactory;
    // use SoftDeletes;
    
    protected $fillable = [
        'mobile_repairings_id',
        'mobile_images',
    ];

    public function MobileRepairingImage()
    {
        return $this->belongsTo(MobileRepairing::class, 'id');
    }
}
