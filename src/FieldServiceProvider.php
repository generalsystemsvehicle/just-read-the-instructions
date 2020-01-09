<?php

namespace GeneralSystemsVehicle\JustReadTheInstructions;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script("justreadtheinstructions-react", __DIR__.'/../dist/js/deps/react.production.min.js');
            Nova::script("justreadtheinstructions-react-dom", __DIR__.'/../dist/js/deps/react-dom.production.min.js');
            Nova::script("justreadtheinstructions-jquery", __DIR__.'/../dist/js/deps/jquery-2.2.4.min.js');

            Nova::script('justreadtheinstructions-jrtijs', __DIR__.'/../dist/js/just-read-the-instructions.js');
            Nova::style('justreadtheinstructions-jrti-css', __DIR__.'/../dist/css/just-read-the-instructions.css');
            Nova::script('justreadtheinstructions', __DIR__.'/../dist/js/field.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(base_path('vendor/van-ons/laraberg/src/config/laraberg.php'), 'laraberg');
    }
}
