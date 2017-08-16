<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * @return void
     * @author http://laravelacademy.org
     */
    public function boot()
    {
       /* view()->composer(
            'demo', 'App\Http\ViewComposers\ProfileComposer'
        );

        view()->composer('test', function ($view) {
            return 123;
        });*/



//        view()->composer(
//            ['profile', 'demo','test'],
//            'App\Http\ViewComposers\ProfileComposer'
//        );

        view()->composer('demo', 'App\Http\ViewComposers\ProfileComposer');

       // view()->creator('demo', 'App\Http\ViewComposers\ProfileComposer');
    }

   /**
    * 
    */
    public function register()
    {
        //
    }
}
