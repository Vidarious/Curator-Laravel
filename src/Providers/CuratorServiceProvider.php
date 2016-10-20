<?php

namespace Curator\Curator\Providers;

use Illuminate\Support\ServiceProvider;

class CuratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      include __DIR__.'/../Routes/web.php';

      $this->app->make('Curator\Curator\Controllers\CuratorController');
    }
}
