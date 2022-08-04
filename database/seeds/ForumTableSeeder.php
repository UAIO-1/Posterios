<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forum')->truncate(); //for cleaning earlier data to avoid duplicate entries
      
    }
}
