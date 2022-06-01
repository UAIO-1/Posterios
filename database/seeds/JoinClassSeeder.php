<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoinClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joinclass')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('joinclass')->insert([
          'user_id' => '3',
          'class_id' => '1',
          'class_code' => 'okas21',
          'user_status' => 'Approved',
          'created_at' => '2022-04-18 03:19:32',
          'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('joinclass')->insert([
            'user_id' => '3',
            'class_id' => '2',
            'class_code' => 'bebek55',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
          ]);
        DB::table('joinclass')->insert([
          'user_id' => '4',
          'class_id' => '1',
          'class_code' => 'okas21',
          'user_status' => 'Approved',
          'created_at' => '2022-04-18 03:19:32',
          'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('joinclass')->insert([
          'user_id' => '5',
          'class_id' => '1',
          'class_code' => 'okas21',
          'user_status' => 'Approved',
          'created_at' => '2022-04-18 03:19:32',
          'updated_at' => '2022-04-18 03:19:32',
        ]);
    }
}
