<?php

use Illuminate\Database\Seeder;
use app\Http\Controllers\MarketingController;

class MarketingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('Marketing')->truncate();

      Marketing::create([
      'name' => 'required',
      'description' => 'required',
      'value' => 'required'
      ]);

    }
}
