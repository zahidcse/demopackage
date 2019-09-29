<?php

namespace Zahidcse\Demopackage;

use Illuminate\Support\ServiceProvider;

class DemopackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        dd('HI');
    }
}
