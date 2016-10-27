<?php

/*
|--------------------------------------------------------------------------
| Curator: Controller
|--------------------------------------------------------------------------
|
| This file defines Curator's Laravel controller.
|
*/

namespace Curator\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Curator\Models;

class CuratorController extends Controller
{

  public function index($timezone)
  {
      echo Carbon::now($timezone)->toDateTimeString();
  }
}
