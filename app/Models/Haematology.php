<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haematology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'price',
        'main_tests_id',
        'id'
    ];
}
