<?php

namespace evento\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('GuzzleHttp\Client', function ()
        { // instancia o guzzle uma unica vez
            return new Client([
                'base_uri' => 'https://banco-de-dados.herokuapp.com/api/v1/' // url da api
            ]);
        });
    }
}
