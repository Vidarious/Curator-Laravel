<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the Setting table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID of the role which will be set as the default role for new users.
        $role = DB::select('SELECT roleID FROM Role WHERE roleName = :name', ['name' => 'Generic']);

        //Insert the default settings for the Curator application.
        DB::table('Setting')->insert([
            'loginMethod'             => 'Username',
            'rememberMe'              => TRUE,
            'loginThrottling'         => TRUE,
            'loginThrottlingAttempts' => 5,
            'loginThrottlingLockout'  => 60,
            'userIdleTime'            => 15,
            'defaultRoleID'           => $role[0]->roleID,
            'loginPage'               => '/'
        ]);
    }
}
