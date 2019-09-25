<?php

namespace Romegadigital\IE11Compatibility;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->publishes([
//            __DIR__.'/../resources/views/partials' => resource_path('views/vendor/nova/partials'),
//        ], 'nova-ie11-views');
//
//        $this->publishes([
//            __DIR__.'/../dist/css' => public_path('vendor/nova'),
//        ], 'nova-ie11-styles');

        Nova::serving(function (ServingNova $event) {
            Nova::script('IE11Compatibility', __DIR__.'/../dist/js/nova.js');
            Nova::style('IE11Compatibility', __DIR__.'/../dist/css/app.css');
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
