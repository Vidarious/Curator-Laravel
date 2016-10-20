<?php

/*
|--------------------------------------------------------------------------
| Web Routes: Curator
|--------------------------------------------------------------------------
|
| This file defines Curator's routes.
|
*/

Route::get('curator/{timezone}', 'Curator\Curator\Controllers\CuratorController@index');
