<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class virologyDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $virologies = [
            [
                'name' => 'HCV',
                'photo' => 'images/HCV.png',
                'price' => 100,
                'main_tests_id' => 7,
            ],
            [
                'name' => 'HBV',
                'photo' => 'images/HBV.png',
                'price' => 100,
                'main_tests_id' => 7,
            ],
            [
                'name' => 'HIV',
                'photo' => 'images/HIV.png',
                'price' => 130,
                'main_tests_id' => 7,
            ],
        ];

        foreach ($virologies as $virology) {
            \App\Models\virology::create($virology);
        }
    }
}
