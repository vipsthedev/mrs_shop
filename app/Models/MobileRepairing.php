<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MobileRepairing
 *
 * Represents a mobile repair record including customer and device details.
 * Supports soft deletes and maintains relationships with Company and Images.
 */
class MobileRepairing extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * These fields are allowed for mass assignment via create() or update() methods.
     */
    protected $fillable = [
        'customer_name',                // Name of the customer
        'customer_email',              // Email address of the customer
        'customer_date',               // Date of repair submission
        'company_id',                  // Foreign key referencing the company (brand)
        'customer_address',            // Address of the customer
        'status',                      // Repair status (e.g., pending, completed)
        'customer_mobile_name',        // Name of the mobile device
        'customer_mobile_model',       // Model number or name
        'customer_mobile_imi_number',  // IMEI number of the device
        'customer_mobile_problem',     // Reported problem or issue
        'repairing_cost',              // Cost to the company for repair
        'repairing_charge',            // Charge applied to the customer
        'total_amount',                // Total amount billed
        'delivery_date',               // Expected or actual delivery date
        'receiver_person_name',        // Name of person receiving the device
        'reference_name',              // Reference contact (if any)
        'other_contact_details',       // Any additional contact details
        'comments',                    // Extra notes or comments
        'mobile_images',               // Path to uploaded image (if any)
    ];

    /**
     * Get the company (brand) that owns this repair record.
     * One repair record belongs to one company.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get all uploaded images related to this repair.
     * One repair record can have many images.
     */
    public function images()
    {
        return $this->hasMany(MobileRepairingImages::class, 'mobile_repairings_id');
    }
}
