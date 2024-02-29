<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class renal_profilesDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $renal_profiles = [
            [
                'name' => 'Urea',
                'photo' => 'images/urea.png',
                'price' => 70,
                'main_tests_id' => 4,
            ],
            [
                'name' => 'Creatinine',
                'photo' => 'images/Creatinine.png',
                'price' => 70,
                'main_tests_id' => 4,
            ],

        ];

        foreach ($renal_profiles as $renal_profile) {
            \App\Models\renal_profile::create($renal_profile);
        }
    }
}
