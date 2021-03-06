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
        DB::table('events_marketings')->truncate();
        Marketing::create([
            'name' => 'Infra Estrutura Jhonadab Services',
            'description' => 'infraesturura em geral do evento',
            'value' => '30000'
        ]);
    }
}