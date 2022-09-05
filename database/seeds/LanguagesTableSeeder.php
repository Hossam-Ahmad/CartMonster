<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'English',
                'code' => 'en',
                'app_lang_code' => 'en',
                'rtl' => 0,
                'status' => 1,
                'created_at' => '2019-01-20 12:13:20',
                'updated_at' => '2019-01-20 12:13:20',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Arabic',
                'code' => 'sa',
                'app_lang_code' => 'ar',
                'rtl' => 1,
                'status' => 1,
                'created_at' => '2019-04-28 18:34:12',
                'updated_at' => '2019-04-28 18:34:12',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Turkish',
                'code' => 'tr',
                'app_lang_code' => 'tr',
                'rtl' => 0,
                'status' => 1,
                'created_at' => '2022-06-15 18:38:41',
                'updated_at' => '2022-06-15 18:38:41',
            ),
        ));
        
        
    }
}