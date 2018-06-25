<?php

use Illuminate\Database\Seeder;
use app\Http\Controllers\EventosController;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        Evento::create([
          'name' => 'Chitaozinho e Chororó - O Trote da Galopeira',
          'event_date' => '2018-06-07',
          'site' => 'confirmar milena',
          'description' => 'Não há metaleiros quando se toca evidencias! Venha curtir esse show!',
          'event_hour' => '21:00:00'
        ]);

    }
}
