<?php

use Illuminate\Database\Seeder;
use app\Http\Controllers\EventosController

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Events')->truncate();

        Evento::create([
          'name' => 'required',
          'event_date' => 'required',
          'site' => 'required',
          'description' => 'required',
          'event_hour' => 'required'
        ]);

    }
}
