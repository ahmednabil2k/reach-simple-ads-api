<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Ads\Database\Seeders\AdsDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdsDatabaseSeeder::class);
    }
}
