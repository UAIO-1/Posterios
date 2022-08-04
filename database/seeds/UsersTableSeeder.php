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
            'name' => 'Admin Posterios 1',
            'email' => 'adminposterios1@gmail.com',
            'password' => Hash::make('admin123'),
            'gender' => 'Male',
            'dob' => '2022-06-15',
            'role' => 'Admin',
            'grade' => 10,
            'sekolah' => 'Posterios School',
            'image_selfie' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'image_card' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'status' => 'Approved',
            'email_verified_at' => '2022-06-11 04:20:56',
            'created_at' => '2022-06-15 04:20:56',
            'updated_at' => '2022-06-15 04:20:56',
          ]);



    }
}
