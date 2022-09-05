<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CitiesTableSeeder::class,
            ColorsTableSeeder::class,
            CountriesTableSeeder::class,
            CurrenciesTableSeeder::class,
            IsyolSettingsTableSeeder::class,
            LanguagesTableSeeder::class,
        ]);
    }
}
