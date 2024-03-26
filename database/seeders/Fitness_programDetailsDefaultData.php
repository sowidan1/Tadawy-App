<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Fitness_programDetailsDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fitness_programs_details = [
            [
                'name' => 'Bodyweight squat',
                'photo_gif' => 'images/bodyweight-squat.gif',
                'photo_png' => 'images/squat.png',
                'description' => 'Stand with your feet shoulder-width apart. Lower your body by bending your knees and pushing your hips back as if you are sitting down.Keep your back straight and chest up. Lower down until your thighs are parallel to the ground or as far as comfortable. Push through your heels to return to the starting position.',
                'fitness_program_id' => '1',

            ],
            [
                'name' => 'Chest dip movement',
                'photo_gif' => 'images/chest-dip-movement.gif',
                'photo_png' => 'images/chest-dip-movemen.png',
                'description' => 'Use parallel bars or sturdy dip bars. Grip the bars with your palms facing each other. Lower your body by bending your elbows until your upper arms are parallel to the ground. Keep your body upright and avoid leaning forward too much. Push through your palms to return to the starting position.',
                'fitness_program_id' => '2',
            ],
            [
                'name' => 'Chin ups',
                'photo_gif' => 'images/chin-ups.gif',
                'photo_png' => 'images/chin-ups.png',
                'description' => 'Hang from a pull-up bar with your palms facing towards you. Pull your body up towards the bar by bending your elbows. Keep your chest up and try to touch your chin to the bar. Lower your body back down with control.',
                'fitness_program_id' => '3',
            ],
            [
                'name' => 'Crunch',
                'photo_gif' => 'images/crunch.gif',
                'photo_png' => 'images/crunch.png',
                'description' => 'Lie on your back with your knees bent and feet flat on the ground. Place your hands behind your head or across your chest. Lift your shoulders towards the ceiling using your abdominal muscles. Avoid pulling on your neck and focus on contracting your abs. Lower your upper body back down with control.',
                'fitness_program_id' => '4',
            ],
            [
                'name' => 'Inverted row',
                'photo_gif' => 'images/inverted-row.gif',
                'photo_png' => 'images/bodyweight-squat.gif',
                'description' => 'Set up a bar at waist height. Lie under the bar, grab it with an overhand grip, and keep your body straight. Pull your chest towards the bar by squeezing your shoulder blades together. Lower your body back down with control.',
                'fitness_program_id' => '5',
            ],
            [
                'name' => 'Pull up',
                'photo_gif' => 'images/pull-up.gif',
                'photo_png' => 'images/pull-up.png',
                'description' => 'Hang from a pull-up bar with your palms facing away. Pull your body up towards the bar by bending your elbows. Keep your chest up and engage your back muscles. Lower your body back down with control.',
                'fitness_program_id' => '6',
            ],
            [
                'name' => 'Push up',
                'photo_gif' => 'images/push-up.gif',
                'photo_png' => 'images/push-up.png',
                'description' => 'Start in a plank position with your hands slightly wider than shoulder-width apart. Lower your body towards the ground by bending your elbows. Keep your body in a straight line and lower until your chest is close to the ground. Push through your palms to return to the starting position.',
                'fitness_program_id' => '7',
            ],
            [
                'name' => 'Tricep dips',
                'photo_gif' => 'images/tricep-dips.gif',
                'photo_png' => 'images/Tricep-dips.png',
                'description' => 'Use parallel bars or a sturdy surface behind you. Grip the bars with your palms facing downward. Lower your body by bending your elbows, keeping them close to your body. Push through your palms to return to the starting position, focusing on your triceps.',
                'fitness_program_id' => '8',
            ],
        ];

        foreach ($fitness_programs_details as $fitness_program) {
            \App\Models\Fitness_program_details::create($fitness_program);
        }

    }
}
