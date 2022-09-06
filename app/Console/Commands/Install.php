<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cart:install {clientName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installing cart monster';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $path = base_path('.env');
        $clientName = $this->argument('clientName');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'DB_DATABASE='.$this->laravel['config']['db.database'], 'DB_DATABASE=saas_'.$clientName, file_get_contents($path)
            ));
            file_put_contents($path, str_replace(
                'DB_USERNAME='.$this->laravel['config']['db.host'], 'DB_USERNAME=saas_'.$clientName, file_get_contents($path)
            ));
            file_put_contents($path, str_replace(
                'DB_PASSWORD='.$this->laravel['config']['db.password'], 'DB_PASSWORD=A1234(5)_?', file_get_contents($path)
            ));
        }

        $this->comment('Generating Keys...');
        Artisan::call("key:generate");
        $this->info('Keys Generated!');

        $this->comment('Clearing Config...');
        Artisan::call("config:cache");
        Artisan::call("config:clear");
        Artisan::call("cache:clear");
        $this->info('Config Cleared!');

        $this->comment('Refreshing Database...');
        Artisan::call("migrate");
        $this->info('Database Refreshed!');

        $this->comment('Preparing Laravel/Passport...');
        Artisan::call("passport:install");
        $this->info('Laravel/Passport Prepared!');

        $this->comment('Generating Passport Keys...');
        Artisan::call("passport:keys");
        $this->info('Passport Keys Generated!');
    }
}
