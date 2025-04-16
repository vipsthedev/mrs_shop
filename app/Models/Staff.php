<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs'; 
    protected $fillable = ['first_name',
    						'last_name',
    						'email',
    						'phone',
    						'date_of_birth',
    						'gender',
    						'address',
    						'status',
    						'department',
    						'position',
    						'hire_date',
    						'shift_name'];
}

