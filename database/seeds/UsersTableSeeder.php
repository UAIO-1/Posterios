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
          'grade' => 10,
          'sekolah' => 'SMAN 7 Bekasi',
          'image_selfie' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
          'image_card' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
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
            'grade' => 10,
            'sekolah' => 'SMAN 7 Bekasi',
            'image_selfie' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'image_card' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'email_verified_at' => '2022-04-18 03:19:32',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
          ]);

          DB::table('users')->insert([
            'name' => 'Gunny123',
            'email' => 'gunny123@gmail.com',
            'password' => Hash::make('gunny123'),
            'gender' => 'Male',
            'dob' => '2022-04-19',
            'role' => 'Student',
            'grade' => 11,
            'sekolah' => 'SMAN 3 Bekasi',
            'image_selfie' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'image_card' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'email_verified_at' => '2022-04-18 03:19:32',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
          ]);

          DB::table('users')->insert([
            'name' => 'Alexander',
            'email' => 'alexander@gmail.com',
            'password' => Hash::make('alex123'),
            'gender' => 'Male',
            'dob' => '2012-01-19',
            'role' => 'Student',
            'grade' => 12,
            'sekolah' => 'SMAN 1 Bekasi',
            'image_selfie' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'image_card' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'email_verified_at' => '2022-04-18 03:19:32',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
          ]);

          DB::table('users')->insert([
            'name' => 'Ethan55',
            'email' => 'ehtan@gmail.com',
            'password' => Hash::make('ethan123'),
            'gender' => 'Male',
            'dob' => '2012-01-19',
            'role' => 'Student',
            'grade' => 12,
            'sekolah' => 'SMAN 2 Bekasi',
            'image_selfie' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'image_card' => 'images/user/YYGqnBlj0GBLAEo2WgLcDJfOO93S132ruqXg0KSv.jpg',
            'email_verified_at' => '2022-04-18 03:19:32',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
          ]);
    }
}
