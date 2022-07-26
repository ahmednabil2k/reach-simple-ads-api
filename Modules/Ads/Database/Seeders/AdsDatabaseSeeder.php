<?php

namespace Modules\Ads\Database\Seeders;

use Illuminate\Database\Seeder;

class AdsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdvertisersSeeder::class);
    }
}
