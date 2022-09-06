<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'user_type' => 'admin',
                'email' => 'isyolmail@gmail.com',
                'password' => '$2y$10$3yYQLjj7JDD.lcvL5FN7N.6Roq9HTgQHD4UHUkKpHFpofV8PB3kbG',
                'email_verified_at' => '2022-07-15 06:07:36',
                'balance' => '0',
                'banned' => '0',
            ),
        ));
        
        
    }
}