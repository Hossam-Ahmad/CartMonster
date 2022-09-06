<?php

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'US Dollar',
                'symbol' => '$',
                'exchange_rate' => 1.0,
                'status' => 1,
                'code' => 'USD',
                'created_at' => '2022-07-16 00:25:54',
                'updated_at' => '2022-07-16 00:25:54',
            ),
        ));
        
        
    }
}