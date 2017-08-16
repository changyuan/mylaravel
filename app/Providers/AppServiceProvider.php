<?php

namespace App\Providers;

use Blade;
use DB;
use Queue;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'../resources/lang/', 'adminlte_lang');

        view()->share('address', 'Beijing');

        Blade::directive('datetime', function($expression) {
            return "<?php echo date('Y-m-d H:i:s'); ?>";
        });


        DB::listen(function($query) {
            // $query->sql
            // $query->bindings
            // $query->time
        });

        Queue::after(function ($connection, $job, $data) {
           //
       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
