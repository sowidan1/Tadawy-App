<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Main_test extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'ray_test_id',
    ];

    public function haematologies()
    {
        return $this->hasMany(Haematology::class, 'main_tests_id');
    }

    public function blood_glucoses()
    {
        return $this->hasMany(Blood_glucose::class, 'main_tests_id');
    }

    public function lipid_profiles()
    {
        return $this->hasMany(Lipid_profile::class, 'main_tests_id');
    }

    // Define similar relationships for other tables
    public function renal_profiles()
    {
        return $this->hasMany(Renal_profile::class, 'main_tests_id');
    }

    public function liver_profiles()
    {
        return $this->hasMany(Liver_profile::class, 'main_tests_id');
    }

    public function cardiac_profiles()
    {
        return $this->hasMany(Cardiac_profile::class, 'main_tests_id');
    }

    public function virologies()
    {
        return $this->hasMany(Virology::class, 'main_tests_id');
    }

    public function parasitologies()
    {
        return $this->hasMany(Parasitology::class, 'main_tests_id');
    }

    public function ray_test()
    {
        return $this->belongsTo(Ray_test::class);
    }
}
