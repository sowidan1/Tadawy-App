<?php

namespace Database\Seeders;
use App\Models\Main_test as ModelsMain_test;
use App\Http\Controllers\TestController\Main_test;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainTestDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $MainTestData = [
            [
                'name' => 'Haematology',
                'photo'=> 'images/Haematology.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Lipid Profile',
                'photo'=> 'images/Lipid.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Blood Glucose',
                'photo'=> 'images/Blood.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Renal Profile',
                'photo'=> 'images/Renal.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Liver Profile',
                'photo'=> 'images/liver.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Cardiac Profile',
                'photo'=> 'images/Cardiac.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Virology',
                'photo'=> 'images/Virology.png',
                'ray_test_id' => '2'
            ],
            [
                'name' => 'Parasitology',
                'photo'=> 'images/Parasitology.png',
                'ray_test_id' => '2'
            ]
        ];

        foreach ($MainTestData as $test) {
            ModelsMain_test::create([
                'name' => $test['name'],
                'photo' => $test['photo'],
                'ray_test_id' => $test['ray_test_id'],
            ]);
        }
    }
}
