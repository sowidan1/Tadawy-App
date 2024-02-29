<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaematologyDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $haematologies = [
            [
                'name' => 'CBC',
                'photo' => 'images/CBC.png',
                'price' => 120,
                'main_tests_id' => 1,
            ]
        ];

        foreach ($haematologies as $haematology) {
            \App\Models\Haematology::create($haematology);
        }
    }
}
