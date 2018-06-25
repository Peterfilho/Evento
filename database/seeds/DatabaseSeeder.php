<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(EventSeeder::class);
         $this->call(MarketingSeeder::class);
         $this->call(SponsorSeeder::class);
    }
}
