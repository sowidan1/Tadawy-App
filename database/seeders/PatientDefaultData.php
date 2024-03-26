<?php

namespace Database\Seeders;

use App\Models\Patients;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PatientDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $patientPermissions = [
            'bookTest',
            'book_X_ray',
            'getProfile',

        ];

        foreach ($patientPermissions as $permission) {
            Permission::Create( [
                'name' => $permission,
                'guard_name' => 'patientApi',
            ]);
        }

        $patientRole = Role::create([
            'name' => 'patient',
            'guard_name' => 'patientApi',
        ]);

        $patientRole->givePermissionTo($patientPermissions);




        $patient = Patients::create([
        'medical_history' => 'No medical history',
        'emergency_contact'=> 'No emergency contact',
        'name'=> 'hana tarek',
        'phone'=> '01014567890',
        'date_of_birth' => '1990-01-01',
        'gender'=>'female',
        'password'=> bcrypt('hana1234'),
        'email'=> 'hana@patient.com',
        'photo'=> 'images/patient.png'
        ]);

        $patientRole = Role::where('name','patient')->first();
        if($patientRole){
            $patient->assignRole($patientRole);
        }
    }
}
