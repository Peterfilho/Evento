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
      DB::table('sponsors')->truncate();

      Patrocinador::create([
        'name' => 'UTFPR',
        'description' => 'os cursos estao patrocinando'
      ]);
    }
}
