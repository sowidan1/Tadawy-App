<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Blood_glucosesDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blood_glucoses = [
            [
                'name' => 'HBA1C',
                'photo' => 'images/HBA1C.png',
                'price' => 150,
                'main_tests_id' => 3,
            ],
            [
                'name' => 'RBG',
                'photo' => 'images/RBG.png',
                'price' => 30,
                'main_tests_id' => 3,
            ],
            [
                'name' => 'FBG',
                'photo' => 'images/FBG.png',
                'price' => 30,
                'main_tests_id' => 3,
            ],
            [
                'name' => 'PPBG',
                'photo' => 'images/PPBG.png',
                'price' => 30,
                'main_tests_id' => 3,
            ],
        ];

        foreach ($blood_glucoses as $blood_glucose) {
            \App\Models\Blood_glucose::create($blood_glucose);
        }
    }
}
