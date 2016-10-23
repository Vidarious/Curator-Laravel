<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActivitySeeder extends Seeder
{
    /**
     * Run the Activity table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get ID for the SysAdmin user.
        $user = DB::select('SELECT userID FROM [User] WHERE username = :name', ['name' => 'SysAdmin']);

        //Insert first record of activity - The creation of the SysAdmin user.
        DB::table('Activity')->insert([
            'userID'     => $user[0]->userID,
            'action'     => 'Created SysAdmin user with Super Administrator permission. This user cannot be deleted.',
            'ipAddress'  => 'System',
            'created_on' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
