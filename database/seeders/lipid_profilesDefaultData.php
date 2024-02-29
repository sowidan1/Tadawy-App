<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class lipid_profilesDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lipid_profiles = [
            [
                'name' => 'Cholesterol',
                'photo' => 'images/Cholesterol.png',
                'price' => 70,
                'main_tests_id' => 2,
            ],
            [
                'name' => 'Triglyceride',
                'photo' => 'images/Triglyceride.png',
                'price' => 70,
                'main_tests_id' => 2,
            ],
            [
                'name' => 'HDL',
                'photo' => 'images/hdl.png',
                'price' => 70,
                'main_tests_id' => 2,
            ],
            [
                'name' => 'LDL',
                'photo' => 'images/ldl.png',
                'price' => 70,
                'main_tests_id' => 2,
            ],
        ];

        foreach ($lipid_profiles as $lipid_profile) {
            \App\Models\lipid_profile::create($lipid_profile);
        }
    }
}
