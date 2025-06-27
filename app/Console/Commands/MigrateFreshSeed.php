<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class MigrateFreshSeed extends Command
{
    protected $signature = 'migrate:fresh-seed';
    protected $description = 'Drop all tables, run migrations, and seed the database';

    public function handle()
    {
        $this->info('Dropping all tables and running migrations...');
        Artisan::call('migrate:fresh', ['--force' => true]);
        $this->info(Artisan::output());

        $this->info('Seeding the database...');
        Artisan::call('db:seed', ['--force' => true]);
        $this->info(Artisan::output());

        $this->info('Database reset and seeded successfully!');
    }
}
