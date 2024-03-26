<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FitnessDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fitnesses = [
            ['name' => 'Back', 'photo' => 'images/back.jpeg'],
            ['name' => 'Arm', 'photo' => 'images/arm.jpeg'],
            ['name' => 'Chest', 'photo' => 'images/Chest.jpg'],
            ['name' => 'Leg', 'photo' => 'images/leg.jpeg'],
            ['name' => 'Six pack', 'photo' => 'images/six_pack.jpeg']];

        foreach ($fitnesses as $fitness) {
            \App\Models\Fitness::create($fitness);
        }
}
}
