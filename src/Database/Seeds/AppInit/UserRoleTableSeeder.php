<?php

use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the UserRole table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID for the SysAdmin user.
        $user = DB::select('SELECT userID FROM [User] WHERE username = :name', ['name' => 'SysAdmin']);
        //Get ID for the Super Administrator role.
        $role = DB::select('SELECT roleID FROM Role WHERE roleName = :name', ['name' => 'Super Administrator']);

        //Insert the user / role relationship for the SysAdmin user.
        DB::table('UserRole')->insert([
            'userID' => $user[0]->userID,
            'roleID' => $role[0]->roleID
        ]);
    }
}
