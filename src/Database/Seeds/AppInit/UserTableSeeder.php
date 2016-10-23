<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the User table seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert the parent Super Administrator account. This is a special
        //account and cannot be deleted.
        DB::table('User')->insert([
            'username'     => 'SysAdmin',
            'displayName'  => 'SysAdmin',
            'passwordHash' => Hash::make('password'),
            'email'        => 'admin@example.com',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
