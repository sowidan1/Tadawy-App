<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Admins extends Authenticatable
{
    use HasFactory ,HasApiTokens,HasRoles;

    protected $fillable =[
        'name',
        'password',
        'email'
    ];
}
