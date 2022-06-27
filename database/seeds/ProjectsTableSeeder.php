<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->truncate(); //for cleaning earlier data to avoid duplicate entries
        DB::table('projects')->insert([
            'user_id' => 6,
            'class_id' => 1,
            'name' => 'Adi Darmawan',
            'gender' => 'Male',
            'project_title' => 'Scratch',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Programming',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 7,
            'class_id' => 1,
            'name' => 'Josep laia',
            'gender' => 'Male',
            'project_title' => 'teknologi game',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Programming',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('projects')->insert([
            'user_id' => 8,
            'class_id' => 1,
            'name' => 'Dessy natalia',
            'gender' => 'Female',
            'project_title' => 'Desain Baju',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Programming',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'ini project design baju',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);
        DB::table('projects')->insert([
            'user_id' => 9,
            'class_id' => 1,
            'name' => 'Nicho siagian',
            'gender' => 'Male',
            'project_title' => 'lorem ipsum',
            'project_category' => 'Teknik',
            'project_subcategory' => 'Komputer dan Jaringan',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'lorem ipsum juga',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'upda
            ted_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 10,
            'class_id' => 1,
            'name' => 'Albert Yunus',
            'gender' => 'Male',
            'project_title' => 'mabar game',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Programming',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'ergefadfg',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 11,
            'class_id' => 1,
            'name' => 'Amelya gressya',
            'gender' => 'Female',
            'project_title' => 'menari ku menari',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Tari',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 12,
            'class_id' => 1,
            'name' => 'Yuliana',
            'gender' => 'Female',
            'project_title' => 'sistem informasi',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Programming',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => '',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 13,
            'class_id' => 1,
            'name' => 'Febri lomboan',
            'gender' => 'Female',
            'project_title' => 'Pemusik',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Musik',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => '',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 14,
            'class_id' => 1,
            'name' => 'jeremi',
            'gender' => 'Male',
            'project_title' => 'Melukis Senja',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Lukis',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => '',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 15,
            'class_id' => 1,
            'name' => 'Andrew Kus',
            'gender' => 'Male',
            'project_title' => 'main game',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Programming',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => '',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 16,
            'class_id' => 1,
            'name' => 'jose',
            'gender' => 'Male',
            'project_title' => 'mona lisa',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Lukis',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => '',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 17,
            'class_id' => 2,
            'name' => 'kalvin eff',
            'gender' => 'Male',
            'project_title' => 'musik pro',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Musik',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => '',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 18,
            'class_id' => 2,
            'name' => 'Alexander Gun.',
            'gender' => 'Male',
            'project_title' => 'codingers',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Programming',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => '',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 19,
            'class_id' => 2,
            'name' => 'Mikayla Q.',
            'gender' => 'Female',
            'project_title' => 'bermain piano',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Musik',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 20,
            'class_id' => 2,
            'name' => 'Clea C',
            'gender' => 'Female',
            'project_title' => 'dancers',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Tari',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 21,
            'class_id' => 2,
            'name' => 'Sella D',
            'gender' => 'Female',
            'project_title' => 'modern dance',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Tari',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 22,
            'class_id' => 2,
            'name' => 'Adrian S',
            'gender' => 'Male',
            'project_title' => 'Elektronika',
            'project_category' => 'Teknik',
            'project_subcategory' => 'Komputer dan Jaringan',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 23,
            'class_id' => 2,
            'name' => 'Albert Ry',
            'gender' => 'Male',
            'project_title' => 'perangkat lunak',
            'project_category' => 'Teknik',
            'project_subcategory' => 'Komputer dan Jaringan',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 24,
            'class_id' => 2,
            'name' => 'Ribka',
            'gender' => 'Female',
            'project_title' => 'Menggambar',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Lukis',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 25,
            'class_id' => 2,
            'name' => 'Excel K',
            'gender' => 'Male',
            'project_title' => 'teknisi',
            'project_category' => 'Teknik',
            'project_subcategory' => 'Komputer dan Jaringan',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 26,
            'class_id' => 2,
            'name' => 'Bryan S',
            'gender' => 'Male',
            'project_title' => 'Gamers Indo',
            'project_category' => 'Teknik',
            'project_subcategory' => 'Programming',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 27,
            'class_id' => 2,
            'name' => 'Julian A',
            'gender' => 'Male',
            'project_title' => 'designer',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Digital Desain',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 28,
            'class_id' => 2,
            'name' => 'Matthew L',
            'gender' => 'Male',
            'project_title' => 'Artist',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Lukis',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 29,
            'class_id' => 2,
            'name' => 'micahael simulia',
            'gender' => 'Male',
            'project_title' => 'interior design',
            'project_category' => 'Teknologi',
            'project_subcategory' => 'Digital Desain',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 30,
            'class_id' => 2,
            'name' => 'Stephanie L',
            'gender' => 'Male',
            'project_title' => 'Musik Live',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Musik',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);

        DB::table('projects')->insert([
            'user_id' => 31,
            'class_id' => 2,
            'name' => 'Stephanie L',
            'gender' => 'Male',
            'project_title' => 'Musik Live',
            'project_category' => 'Seni',
            'project_subcategory' => 'Seni Musik',
            'project_image' => 'images/project/Lqfod8D1oxxjialXFlRT2S0mXL48MK5TOI2NHOcR.png',
            'project_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'project_link' => 'https://scratch.mit.edu/projects/662437765',
            'project_video' => '',
            'project_video_link' => 'https://www.youtube.com/watch?v=kuEGsvVCAu8&list=PLQkygKP5WXvI452Tv7dFkTer-xZRg4KTP&index=3',
            'created_at' => '2022-04-18 03:19:32',
            'updated_at' => '2022-04-18 03:19:32',
        ]);


    }
}
