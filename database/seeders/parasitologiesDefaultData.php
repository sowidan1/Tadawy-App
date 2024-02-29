<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class parasitologiesDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parasitologies = [
            [
                'name' => 'Urine ',
                'photo' => 'images/Urine.png',
                'price' => 30,
                'main_tests_id' => 8,
            ],
            [
                'name' => 'Stool',
                'photo' => 'images/Stool.png',
                'price' => 130,
                'main_tests_id' => 8,
            ],
        ];

        foreach ($parasitologies as $parasitology) {
            \App\Models\parasitology::create($parasitology);
        }
    }
}
