<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'location',
        'date',
        'time',
        'visit',
        'total_price',
        'ray_test_id',
        'main_test_id',
        'haematologie_id',
        'blood_glucose_id',
        'lipid_profile_id',
        'renal_profile_id',
        'liver_profile_id',
        'cardiac_profile_id',
        'virologie_id',
        'parasitologie_id',
    ];
}
