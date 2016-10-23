<?php

/*
|--------------------------------------------------------------------------
| Curator: Web Routes
|--------------------------------------------------------------------------
|
| This file defines Curator's Laravel routes.
|
*/

Route::get('curator/{timezone}', 'Curator\Curator\Controllers\CuratorController@index');
