<?php

namespace Database\Seeders;

use App\Models\Doctors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DoctorDefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $doctorPermissions = [
            
        ];

        foreach ($doctorPermissions as $permission) {
            Permission::Create( [
                'name' => $permission,
                'guard_name' => 'doctorApi',
            ]);
        }

        $doctorRole = Role::create([
            'name' => 'doctor',
            'guard_name' => 'doctorApi',
        ]);

        $doctorRole->givePermissionTo($doctorPermissions);


        $DoctorsData = [
            [
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'brain and nerves',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 1,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'brain and nerves',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 1,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'brain and nerves',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 1,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'brain and nerves',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 1,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'brain and nerves',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 1,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed1@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'skin canser',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 2,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed2@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'skin canser',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 2,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid3@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'skin canser',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 2,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha4@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'skin canser',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 2,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima5@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'skin canser',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 2,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed6@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'dental',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 3,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed7@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'dental',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 3,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid8@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'dental',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 3,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha9@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'dental',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 3,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima10@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'dental',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 3,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed11@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'heart and vascular disarases',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 4,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed12@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'heart and vascular disarases',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 4,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid13@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'heart and vascular disarases',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 4,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha14@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'heart and vascular disarases',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 4,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima15@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'heart and vascular disarases',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 4,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed16@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'infant incubator',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 5,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed17@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'infant incubator',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 5,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid18@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'infant incubator',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 5,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha19@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'infant incubator',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 5,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima20@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'infant incubator',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 5,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed21@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'breast cancer',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 6,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed22@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'breast cancer',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 6,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid23@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'breast cancer',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 6,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha24@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'breast cancer',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 6,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima25@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'breast cancer',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 6,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed26@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'nose, ear and throat',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 7,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed27@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'nose, ear and throat',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 7,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid28@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'nose, ear and throat',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 7,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha29@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'nose, ear and throat',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 7,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima30@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'nose, ear and throat',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 7,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed31@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'eyes',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 8,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed32@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'eyes',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 8,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid33@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'eyes',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 8,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha34@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'eyes',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 8,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima35@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'eyes',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 8,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed36@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'bones',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' =>9,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed38@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'bones',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' =>9,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid39@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'bones',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' =>9,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha40@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'bones',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' =>9,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima50@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'bones',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' =>9,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed60@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'emergencies',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' =>10,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed61@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'emergencies',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' =>10,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid62@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'emergencies',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' =>10,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha63@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'emergencies',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' =>10,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima64@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'emergencies',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' =>10,
            ],[
                'name' => 'Dr. Mohammed Adel',
                'email' => 'mohamed6522@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'obstetrics and gynecology',
                'year_of_experience' => '5',
                'photo' => 'images/doctor.png',
                'clinic_id' => 11,
            ],[
                'name' => 'Dr. Ahmed Mostafa',
                'email' => 'Ahmed66@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1970-01-01',
                'gender' => 'male',
                'phone' => '01014785478',
                'specialty' => 'obstetrics and gynecology',
                'year_of_experience' => '15',
                'photo' => 'images/doctor.png',
                'clinic_id' => 11,
            ],[
                'name' => 'Dr. Khalid Adel',
                'email' => 'Khalid67@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'obstetrics and gynecology',
                'year_of_experience' => '8',
                'photo' => 'images/doctor.png',
                'clinic_id' => 11,
            ],[
                'name' => 'Dr. noha reda',
                'email' => 'noha68@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014785236',
                'specialty' => 'obstetrics and gynecology',
                'year_of_experience' => '8',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 11,
            ],[
                'name' => 'Dr. fatima Adel',
                'email' => 'fatima69@doctor.com',
                'password' => bcrypt('123456'),
                'date_of_birth' => '1990-01-01',
                'gender' => 'male',
                'phone' => '01014775236',
                'specialty' => 'obstetrics and gynecology',
                'year_of_experience' => '5',
                'photo' => 'images/doctor-female.png',
                'clinic_id' => 11,
            ],
        ];


        foreach ($DoctorsData as $data) {

            $Doctor=Doctors::create($data);

            $doctortRole = Role::where('name','patient')->first();
            if($doctortRole){
            $Doctor->assignRole($doctortRole);
        }
        }

    }
}
