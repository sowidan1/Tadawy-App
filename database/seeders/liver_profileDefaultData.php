<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class liver_profileDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $liver_profiles = [
            [
                'name' => 'GOT',
                'photo' => 'images/GOT.png',
                'price' => 70,
                'main_tests_id' => 5,
            ],
            [
                'name' => 'GPT',
                'photo' => 'images/GPT.png',
                'price' => 70,
                'main_tests_id' => 5,
            ],

        ];

        foreach ($liver_profiles as $liver_profile) {
            \App\Models\liver_profile::create($liver_profile);
        }

    }
}
