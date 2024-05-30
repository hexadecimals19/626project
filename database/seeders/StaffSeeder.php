<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'custname' => 'John Doe',
            'custemail' => 'admin@gmail.com',
            'custpassword' => bcrypt('password'),
            'usertype' => 'admin',
            'custphone' => '1111111111',
            'custaddress' => 'Malaysia',
            'usertype' => 'admin',
        ]);
    }
}

