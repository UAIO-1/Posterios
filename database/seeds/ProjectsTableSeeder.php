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
            'user_id' => 2,
            'class_id' => '1',
            'name' => 'Luminiore',
            'gender' => 'Female',
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
            'user_id' => 2,
            'class_id' => '1',
            'name' => 'Luminiore',
            'gender' => 'Female',
            'project_title' => 'Genshin Impact',
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
            'user_id' => 2,
            'class_id' => '1',
            'name' => 'Luminiore',
            'gender' => 'Female',
            'project_title' => 'WKWKWKWKWKWK',
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
            'user_id' => 3,
            'name' => 'Gunny123',
            'gender' => 'Male',
            'project_title' => 'Unity',
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
            'user_id' => 3,
            'name' => 'Gunny123',
            'gender' => 'Male',
            'project_title' => 'Tynker',
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
            'user_id' => 2,
            'name' => 'Luminiore',
            'gender' => 'Female',
            'project_title' => 'Genshin Impact',
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
            'user_id' => 2,
            'name' => 'Luminiore',
            'gender' => 'Female',
            'project_title' => 'WKWKWKWKWKWK',
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
            'user_id' => 3,
            'name' => 'Gunny123',
            'gender' => 'Male',
            'project_title' => 'Unity',
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
            'user_id' => 3,
            'name' => 'Gunny123',
            'gender' => 'Male',
            'project_title' => 'Tynker',
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
            'user_id' => 2,
            'name' => 'Luminiore',
            'gender' => 'Female',
            'project_title' => 'Genshin Impact',
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
            'user_id' => 2,
            'name' => 'Luminiore',
            'gender' => 'Female',
            'project_title' => 'WKWKWKWKWKWK',
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
            'user_id' => 3,
            'name' => 'Gunny123',
            'gender' => 'Male',
            'project_title' => 'Unity',
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
            'user_id' => 3,
            'name' => 'Gunny123',
            'gender' => 'Male',
            'project_title' => 'Tynker',
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
