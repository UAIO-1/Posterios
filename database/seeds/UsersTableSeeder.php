<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('users')->insert([
          'name' => 'Admin Posterios',
          'email' => 'adminposterios@gmail.com',
          'password' => Hash::make('admin123'),
          'gender' => 'Male',
          'dob' => '2022-04-19',
          'role' => 'Admin',
          'email_verified_at' => '2022-04-18 03:19:32',
          'created_at' => '2022-04-18 03:19:32',
          'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('users')->insert([
            'name' => 'Luminiore',
            'email' => 'luminos@gmail.com',
            'password' => Hash::make('luminos123'),
            'gender' => 'Female',
            'dob' => '2022-04-19',
            'role' => 'Student',
            'email_verified_at' => '2022-04-18 03:19:32',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
          ]);
          DB::table('users')->insert([
            'name' => 'Gunny123',
            'email' => 'gunny@gmail.com',
            'password' => Hash::make('gunny123'),
            'gender' => 'Male',
            'dob' => '2022-04-19',
            'role' => 'Student',
            'email_verified_at' => '2022-04-18 03:19:32',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
          ]);
    }
}
