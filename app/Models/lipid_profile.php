<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lipid_profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'price',
        'main_tests_id',
        'id',
    ];
}
