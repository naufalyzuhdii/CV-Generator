<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([[
            'email' => 'adrian@gmail.com',
            'username' => 'adrian',
            'password' => Hash::make('adrian123'),
            'full_name' => 'adrian rianto',
            'gender' => 'Male',
            'dob' => '2001-03-05',
            'phone' => '0895395220346',
            'address' => Str::random(20),
            'linked_in' => 'https://www.linkedin.com/in/adrian-rianto-740b811a2/',
        ],[
            'email' => 'naufaly@gmail.com',
            'username' => 'naufaly',
            'password' => Hash::make('naufaly123'),
            'full_name' => 'Naufaly Zuhdi Indriandi',
            'gender' => 'Male',
            'dob' => '2001-12-26',
            'phone' => '0895395220347',
            'address' => Str::random(20),
            'linked_in' => 'https://www.linkedin.com/in/naufaly-zuhdi-740b811a2/',
        ],[
            'email' => 'stanleyfeleri@gmail.com',
            'username' => 'stanley',
            'password' => Hash::make('stanley123'),
            'full_name' => 'stanley feleri',
            'gender' => 'Male',
            'dob' => '2001-09-20',
            'phone' => '085348689889',
            'address' => Str::random(20),
            'linked_in' => 'https://www.linkedin.com/in/stanley-feleri/',
        ]]);
    }
}
