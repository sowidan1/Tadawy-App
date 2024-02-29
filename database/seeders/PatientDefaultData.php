<?php

namespace Database\Seeders;

use App\Models\Patients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patients::create([
        'medical_history' => 'No medical history',
        'emergency_contact'=> 'No emergency contact',
        'name'=> 'hana tarek',
        'phone'=> '01014567890',
        'date_of_birth' => '1990-01-01',
        'gender'=>'female',
        'password'=> bcrypt('123456'),
        'email'=> 'hana@patient.com',
        ]);
    }
}
