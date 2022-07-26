<?php

namespace Modules\Ads\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdvertisersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advertisers = [

            [
                'name' => 'Ahmed Nabil',
                'email' => 'ahmednabil@gmail.com',
                'password' => Hash::make(random_bytes(8))
            ],
            [
                'name' => 'Esraa Elsayed',
                'email' => 'esraaelsayed@gmail.com',
                'password' => Hash::make(random_bytes(8))
            ],
            [
                'name' => 'Mohammed Ahmed',
                'email' => 'mohammedahmed@gmail.com',
                'password' => Hash::make(random_bytes(8))
            ],
        ];

        DB::table('advertisers')->insert($advertisers);
    }
}
