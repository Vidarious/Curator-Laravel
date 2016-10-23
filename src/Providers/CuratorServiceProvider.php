<?php

/*
|--------------------------------------------------------------------------
| Curator: Service Provider
|--------------------------------------------------------------------------
|
| This file defines Curator's Laravel service provider.
|
*/

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
        //Load Curator's migrations.
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      //Load Curator's routes.
      include __DIR__.'/../Routes/CuratorRoutesWeb.php';

      //Load Curator's seeds.
      include __DIR__.'/../Database/Seeds/CuratorDatabaseSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/StatusTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/UserTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/FlagTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/RoleTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/SettingTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/PermissionTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/UserStatusTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/ActivityTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/UserRoleTableSeeder.php';
      include __DIR__.'/../Database/Seeds/AppInit/RolePermissionTableSeeder.php';

      //Initialize Curator's controller.
      $this->app->make('Curator\Curator\Controllers\CuratorController');
    }
}
