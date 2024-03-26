<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\renal_profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClinicsDefaultData::class,
            DoctorDefaultData::class,
            PatientDefaultData::class,
            X_ray_TestDefaultData::class,
            MainTestDefaultData::class,
            Blood_glucosesDefaultData::class,
            cardiac_profileDefaultData::class,
            HaematologyDefaultData::class,
            lipid_profilesDefaultData::class,
            liver_profileDefaultData::class,
            parasitologiesDefaultData::class,
            renal_profilesDefaultData::class,
            virologyDefaultData::class,
            X_rayDefaultData::class,
            FitnessDefaultData::class,
            Fitness_showDefaultData::class,
            Fitness_programDefaultData::class,
            Fitness_programDetailsDefaultData::class,
            AdminDefaultData::class,
        ]);
    }
}
