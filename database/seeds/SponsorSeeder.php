<?php

use Illuminate\Database\Seeder;
use app\Http\Controllers\PatrocinadoresController;


class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Sponsor')->truncate();

      Patrocinador::create([
        'name' => 'required',
        'description' => 'required'
      ]);
    }
}
