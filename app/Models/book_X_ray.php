<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_X_ray extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_name',
        'x_ray_name',
        'x_ray_id',
        'price',
        'date',
        'time',
        'patient_id',
    ];
}
