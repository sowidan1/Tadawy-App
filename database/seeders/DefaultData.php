<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data['name']='osama mohamed';
        $data['password']=bcrypt('12345');
        $data['email']='admin@admin.com';


        Admins::create($data);
    }
}
