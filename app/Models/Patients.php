<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Patients extends Authenticatable
{
    use HasFactory,HasApiTokens,HasRoles;

    protected $fillable =[
        'medical_history',
        'emergency_contact',
        'name',
        'phone',
        'date_of_birth',
        'gender',
        'password',
        'email',
    ];
}
