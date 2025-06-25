<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MobileRepairing extends Model
{
    use HasFactory;
    use SoftDeletes;
    

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_date',
        'company_id',
        'customer_address',
        'status',
        'customer_mobile_name',
        'customer_mobile_model',
        'customer_mobile_imi_number',
        'customer_mobile_problem',
        'reapring_cost',
        'reapring_charge',
        'total_amount',
        'delivery_date',
        'receiver_person_name',
        'reference_name',
        'other_contact_details',
        'comments',
        'mobile_images',
    ];

    // Define Relationship
    public function Company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function MobileRepairingImage()
    {
        return $this->hasMany(MobileRepairingImages::class,'mobile_repairings_id');
    }

}
