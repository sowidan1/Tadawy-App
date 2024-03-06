<?php

namespace Database\Seeders;

use App\Models\Clinics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicsDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $clinicsData = [
            [
                'name' => 'brain and nerves',
                'photo' => 'images/brain.png',
                'description' => 'brain and nerves',
            ],[
                'name' => 'skin canser',
                'photo' => 'images/skin-cancer.png',
                'description' => 'skin canser',
            ],[
                'name' => 'dental',
                'photo' => 'images/dental.png',
                'description' => 'dental',
            ],[
                'name' => 'heart and vascular disarases',
                'photo' => 'images/heart.png',
                'description' => 'heart and vascular disarases',
            ],  [
                'name' => 'infant incubator',
                'photo' => 'images/incubator.png',
                'description' => 'infant incubator',
            ],  [
                'name' => 'breast cancer',
                'photo' => 'images/cancer-ribbon.png',
                'description' => 'breast cancer',
            ],  [
                'name' => 'nose, ear and throat',
                'photo' => 'images/respiratory-system.png',
                'description' => 'nose, ear and throat',
            ],  [
                'name' => 'eyes',
                'photo' => 'images/eye.png',
                'description' => 'eyes',
            ],  [
                'name' => 'bones',
                'photo' => 'images/bones.png',
                'description' => 'bones',
            ],  [
                'name' => 'emergencies',
                'photo' => 'images/emergency.png',
                'description' => 'emergencies',
            ],  [
                'name' => 'obstetrics and gynecology',
                'photo' => 'images/pregnant.png',
                'description' => 'obstetrics and gynecology',
            ]

        ];

        foreach ($clinicsData as $data) {
            \App\Models\Clinics::create($data);
        }
    }
}
