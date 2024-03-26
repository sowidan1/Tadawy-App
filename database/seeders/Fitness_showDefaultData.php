<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Fitness_showDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'photo' => 'images/back/Across-Chest-Shoulder-Stretch.gif',
                'fitness_id' => 1
            ],
            [
                'photo' => 'images/back/Shoulder-Stretch-behind.gif',
                'fitness_id' => 1
            ],
            [
                'photo' => 'images/back/Standing-Reach-Up-Back-rotation-Stretch.gif',
                'fitness_id' => 1
            ],
            [
                'photo' => 'images/back/Standing-Side-Bend-Stretch.gif',
                'fitness_id' => 1
            ],
            [
                'photo' => 'images/back/Stretch-With-Towel.gif',
                'fitness_id' => 1
            ],
            [
                'photo' => 'images/back/Upper-Back-Stretch.gif',
                'fitness_id' => 1
            ],
            [
                'photo' => 'images/arm/Concentration-Curl.gif',
                'fitness_id' => 2
            ],
            [
                'photo' => 'images/arm/Dumbbell-Curl.gif',
                'fitness_id' => 2
            ],
            [
                'photo' => 'images/arm/Dumbbell-Preacher-Curl.gif',
                'fitness_id' => 2
            ],
            [
                'photo' => 'images/arm/Dumbbell-Triceps-Extension.gif',
                'fitness_id' => 2
            ],
            [
                'photo' => 'images/arm/Dumbbell-Wrist-Curl.gif',
                'fitness_id' => 2
            ],
            [
                'photo' => 'images/arm/Hammer-Curl.gif',
                'fitness_id' => 2
            ],
            [
                'photo' => 'images/chest/Barbell-Bench-Press.gif',
                'fitness_id' => 3
            ],
            [
                'photo' => 'images/chest/Cable-Upper-Chest-Crossovers.gif',
                'fitness_id' => 3
            ],
            [
                'photo' => 'images/chest/Dumbbell-Pullover.gif',
                'fitness_id' => 3
            ],
            [
                'photo' => 'images/chest/Medicine-Ball-Overhead-Throw.gif',
                'fitness_id' => 3
            ],
            [
                'photo' => 'images/chest/Pec-Deck-Fly.gif',
                'fitness_id' => 3
            ],
            [
                'photo' => 'images/chest/Standing-Medicine-Ball-Chest-Pass.gif',
                'fitness_id' => 3
            ],
            [
                'photo' => 'images/leg/5-Dot-drills-agility-exercise.gif',
                'fitness_id' => 4
            ],
            [
                'photo' => 'images/leg/Depth-Jump-to-Hurdle-Hop.gif',
                'fitness_id' => 4
            ],
            [
                'photo' => 'images/leg/Dumbbell-Squat.gif',
                'fitness_id' => 4
            ],
            [
                'photo' => 'images/leg/High-Knee-Lunge-on-Bosu-Ball.gif',
                'fitness_id' => 4
            ],
            [
                'photo' => 'images/leg/power-lunge.gif',
                'fitness_id' => 4
            ],
            [
                'photo' => 'images/leg/Standing-Leg-Circles.gif',
                'fitness_id' => 4
            ],
            [
                'photo' => 'images/six_back/Cross-Crunch.gif',
                'fitness_id' => 5
            ],
            [
                'photo' => 'images/six_back/Crunch.gif',
                'fitness_id' => 5
            ],
            [
                'photo' => 'images/six_back/Leg-Raise-Dragon-Flag.gif',
                'fitness_id' => 5
            ],
            [
                'photo' => 'images/six_back/Russian-Twist.gif',
                'fitness_id' => 5
            ],
            [
                'photo' => 'images/six_back/Seated-Bench-Leg-Pull-in.gif',
                'fitness_id' => 5
            ],
            [
                'photo' => 'images/six_back/Standing-Cable-Crunch.gif',
                'fitness_id' => 5
            ],
        ];


        foreach ($data as $value) {
            \App\Models\Fitness_show::create($value);
        }

    }
}
