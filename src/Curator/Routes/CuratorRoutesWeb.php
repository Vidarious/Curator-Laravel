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

    echo '<br><br>';

    $userRoles = Curator\Models\User::find(1)->roles->first()->roleName;

    var_dump($userRoles);

    echo '<br><br>';

    $rolesUser = Curator\Models\Role::find(3)->users->first()->username;

    var_dump($rolesUser);

    echo '<br><br>';

    $user = Curator\Models\User::find(1);
    $user->permissions()->attach(1);

    $permissionUser = Curator\Models\User::find(1)->permissions->first()->permissionName;

    var_dump($permissionUser);

    echo '<br><br>';

    $userPermission = Curator\Models\Permission::find(1)->users->first()->email;

    var_dump($userPermission);

    echo '<br><br>';

    $user->permissions()->detach(1);

    //$role = Curator\Models\Role::find(3);
    //$role->permissions()->attach(1);

    $permissionRole = Curator\Models\Permission::find(1)->roles->first()->description;

    var_dump($permissionRole);

    echo '<br><br>';

    $rolePermission = Curator\Models\Role::find(2)->permissions->get(2)->permissionName;

    var_dump($rolePermission);

    echo '<br><br>';

    //$role->permissions()->detach(1);

    $settingDefaultRole = Curator\Models\Setting::find(1)->role->roleName;

    var_dump($settingDefaultRole);

    echo '<br><br>';

    $givenName = Curator\Models\User::find(1)->givenName;

    var_dump($givenName);

    echo '<br><br>';

    $familyName = Curator\Models\User::find(1)->familyName;

    var_dump($familyName);

    echo '<br><br>';

    $createdAt = Curator\Models\User::find(1)->created_at;

    var_dump($createdAt);
});
