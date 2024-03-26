<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cardiac_profileDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cardiac_profiles = [
            [
                'name' => 'Troponin',
                'photo' => 'images/Troponin.png',
                'price' => 300,
                'main_tests_id' => 6,
            ],
            [
                'name' => 'CKMB ',
                'photo' => 'images/CKMB.png',
                'price' => 250,
                'main_tests_id' => 6,
            ],
            [
                'name' => 'LDH',
                'photo' => 'images/LDH.png',
                'price' => 130,
                'main_tests_id' => 6,
            ],
        ];

        foreach ($cardiac_profiles as $cardiac_profile) {
            \App\Models\cardiac_profile::create($cardiac_profile);
        }
    }
}
