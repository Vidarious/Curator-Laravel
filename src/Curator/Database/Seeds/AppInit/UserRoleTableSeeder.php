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
        $userID = Curator\Models\User::where('username', 'SysAdmin')->first()->userID;

        //Get ID for the Super Administrator role.
        $role = DB::select('SELECT roleID FROM Role WHERE roleName = :name', ['name' => 'Super Administrator']);

        //Insert the user / role relationship for the SysAdmin user.
        DB::table('UserRole')->insert([
            'userID' => $userID,
            'roleID' => $role[0]->roleID
        ]);
    }
}
