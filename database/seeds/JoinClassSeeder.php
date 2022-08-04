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


    }
}
