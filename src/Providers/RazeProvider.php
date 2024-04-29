<?php

namespace Ribedo\Raze\Providers;

use Illuminate\Support\ServiceProvider;
use Ribedo\Raze\Console\RazeInit;
use Illuminate\Support\Facades\Blade;

class RazeProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('razeScript', function () {
            if (!file_exists(dirname(getcwd()) . '/raze.json')) {
                throw new \Exception("raze.json not found. Tip: Run 'php artisan raze:init' to create raze.json", 1);
            }

            $razeConfig = json_decode(file_get_contents(dirname(getcwd()) . '/raze.json'), true);

            if (!is_array($razeConfig)) {
                throw new \Exception("The raze.json file appears to be invalid. A helpful tip: Execute 'php artisan raze:init' to generate a valid raze.json.", 1);
            }

            if (!array_key_exists('include', $razeConfig)) {
                throw new \Exception("The raze.json file appears to be invalid. A helpful tip: Execute 'php artisan raze:init' to generate a valid raze.json.", 1);
            }

            return "<script>" . file_get_contents(__DIR__ . '/../js/raze.js') . "</script>";
        });

        $this->commands(RazeInit::class);
    }
}
