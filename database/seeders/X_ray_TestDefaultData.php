<?php

namespace Database\Seeders;

use App\Models\Ray_test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class X_ray_TestDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $X_ray_testData = [
            [
                'name' => 'X-ray',
            ],
            [
                'name' => 'Test',
            ]
        ];

        foreach ($X_ray_testData as $data) {
            Ray_test::create([
                'name' => $data['name']
            ]);
        }
    }
}
