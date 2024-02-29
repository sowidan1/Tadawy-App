<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Doctors extends Authenticatable
{
    use HasFactory,HasApiTokens,HasRoles;

    protected $fillable =[
        'name',
        'password',
        'email',
        'specialty',
        'year_of_experience',
        'phone',
        'date_of_birth',
        'gender',
        'photo',
        'clinic_id'
    ];
}
