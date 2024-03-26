<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Fitness_programDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fitness_programs = [
            [
                'name' => 'Bodyweight squat',
                'photo' => 'images/bodyweight-squat.gif',
            ],
            [
                'name' => 'Chest dip movement',
                'photo' => 'images/chest-dip-movement.gif',
            ],
            [
                'name' => 'Chin ups',
                'photo' => 'images/chin-ups.gif',
            ],
            [
                'name' => 'Crunch',
                'photo' => 'images/crunch.gif',
            ],
            [
                'name' => 'Inverted row',
                'photo' => 'images/inverted-row.gif',
            ],
            [
                'name' => 'Pull up',
                'photo' => 'images/pull-up.gif',
            ],
            [
                'name' => 'Push up',
                'photo' => 'images/push-up.gif',
            ],
            [
                'name' => 'Tricep dips',
                'photo' => 'images/tricep-dips.gif',
            ],
        ];

        foreach ($fitness_programs as $fitness_program) {
            \App\Models\Fitness_program::create($fitness_program);
        }
    }
}
