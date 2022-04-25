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
        DB::table('forum')->insert([
            'user_id' => 2,
            'name' => 'Luminiore',
            'forum_title' => 'Scratch',
            'forum_category' => 'Teknologi',
            'forum_subcategory' => 'Programming',
            'forum_message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'forum_image' => 'images\project\tHDCQBYSEzK9vhbVhlZzQQFmZZUnoHZVRTYi2Vp5.png',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('forum')->insert([
            'user_id' => 3,
            'name' => 'Gunny123',
            'forum_title' => 'Genshin Impact',
            'forum_category' => 'Teknologi',
            'forum_subcategory' => 'Digital Desain',
            'forum_message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'forum_image' => 'images\project\tHDCQBYSEzK9vhbVhlZzQQFmZZUnoHZVRTYi2Vp5.png',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('forum')->insert([
            'user_id' => 3,
            'name' => 'Gunny123',
            'forum_title' => 'Tari Tarian',
            'forum_category' => 'Seni',
            'forum_subcategory' => 'Seni Tari',
            'forum_message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'forum_image' => 'images\project\tHDCQBYSEzK9vhbVhlZzQQFmZZUnoHZVRTYi2Vp5.png',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('forum')->insert([
            'user_id' => 2,
            'name' => 'Luminiore',
            'forum_title' => 'Scratch',
            'forum_category' => 'Teknologi',
            'forum_subcategory' => 'Programming',
            'forum_message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'forum_image' => 'images\project\tHDCQBYSEzK9vhbVhlZzQQFmZZUnoHZVRTYi2Vp5.png',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('forum')->insert([
            'user_id' => 3,
            'name' => 'Gunny123',
            'forum_title' => 'Genshin Impact',
            'forum_category' => 'Teknologi',
            'forum_subcategory' => 'Digital Desain',
            'forum_message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'forum_image' => 'images\project\tHDCQBYSEzK9vhbVhlZzQQFmZZUnoHZVRTYi2Vp5.png',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('forum')->insert([
            'user_id' => 3,
            'name' => 'Gunny123',
            'forum_title' => 'Tari Tarian',
            'forum_category' => 'Seni',
            'forum_subcategory' => 'Seni Tari',
            'forum_message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'forum_image' => 'images\project\tHDCQBYSEzK9vhbVhlZzQQFmZZUnoHZVRTYi2Vp5.png',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);
    }
}
