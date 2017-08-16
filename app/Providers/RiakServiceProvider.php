<?php

namespace App\Providers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{

    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(ResponseFactory $factory)
    {
        //
    }

    /**
     * Register the application services.
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('Riak\Contracts\Connection', function ($app) {
            return new Connection(config('riak'));
        });
    }

    public function provides() {

        return ['Riak\Contracts\Connection'];
    }

}
