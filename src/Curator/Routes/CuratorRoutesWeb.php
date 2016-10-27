<?php

/*
|--------------------------------------------------------------------------
| Curator: Web Routes
|--------------------------------------------------------------------------
|
| This file defines Curator's Laravel routes.
|
*/

Route::get('curator/{timezone}', 'Curator\Controllers\CuratorController@index');

Route::get('curator', function()
{
    $users = Curator\Models\User::find(1)->status->description;

    var_dump($users);

    echo '<br><br>';

    $status = Curator\Models\Status::find(4)->user->first()->displayName;

    var_dump($status);

    echo '<br><br>';

    $statusActivity = Curator\Models\Status::find(4)->activity->first()->action;

    var_dump($statusActivity);

    echo '<br><br>';

    $activity = Curator\Models\Activity::find(1)->user->username;

    var_dump($activity);

    echo '<br><br>';

    $usersActivity = Curator\Models\User::find(1)->activity->first()->action;

    var_dump($usersActivity);

    echo '<br><br>';

    $usersFlag = Curator\Models\User::find(1)->flags->first()->description;

    var_dump($usersFlag);

    echo '<br><br>';

    $flagUsers = Curator\Models\Flag::find(1)->users->first()->username;

    var_dump($flagUsers);

    /*
    $users = Curator\Models\CuratorUser::all();

    foreach($users as $user)
    {
        echo $user->username;
    }
    */
});
