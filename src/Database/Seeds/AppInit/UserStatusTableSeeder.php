<?php

use Illuminate\Database\Seeder;

class UserStatusSeeder extends Seeder
{
    /**
     * Run the UserStatus table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID for the SysAdmin user.
        $user   = DB::select('SELECT userID FROM [User] WHERE username = :name', ['name' => 'SysAdmin']);
        //Get ID for the Protected status.
        $status = DB::select('SELECT statusID FROM Status WHERE description = :desc', ['desc' => 'Protected']);

        //Insert the user / status relationship for the SysAdmin.
        DB::table('UserStatus')->insert([
            'userID'   => $user[0]->userID,
            'statusID' => $status[0]->statusID
        ]);
    }
}
