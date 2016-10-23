<?php

/*
|--------------------------------------------------------------------------
| Curator: Controller
|--------------------------------------------------------------------------
|
| This file defines Curator's Laravel controller.
|
*/

namespace Curator\Curator\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CuratorController extends Controller
{
  public function index($timezone)
  {
      echo Carbon::now($timezone)->toDateTimeString();
  }
}
