<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class X_rayDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $x_ray = [
            [
                'name' => 'Brain CT Scan',
                'photo' => 'images/Brain-CT.png',
                'ray_test_id' => 1,
                'price' => '200'
            ],
            [
                'name' => 'Chest CT Scan',
                'photo' => 'images/Chest-CT.png',
                'ray_test_id' => 1,
                'price' => '320'
            ],
            [
                'name' => 'Sinuses CT Scan',
                'photo' => 'images/CT-Sinuses.png',
                'ray_test_id' => 1,
                'price' => '230'
            ],
            [
                'name' => 'CB CT Scan',
                'photo' => 'images/CB-CT.png',
                'ray_test_id' => 1,
                'price' => '320'
            ],
            [
                'name' => 'Abdominal and Pelvic CT scan',
                'photo' => 'images/Abdominal-and-Pelvic-CT.png',
                'ray_test_id' => 1,
                'price' => '900'
            ],
            [
                'name' => 'Liver CT scan',
                'photo' => 'images/Liver-CT.png',
                'ray_test_id' => 1,
                'price' => '900'
            ],
            [
                'name' => 'Ear CT scan',
                'photo' => 'images/Ear-CT.png',
                'ray_test_id' => 1,
                'price' => '230'
            ]
        ];

        foreach ($x_ray as $x_ray) {
            \App\Models\X_Ray::create($x_ray);
        }
    }
}
