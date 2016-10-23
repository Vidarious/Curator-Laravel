<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStatusTable extends Migration
{
    /**
     * Run the UserStatus table migrations.
     *
     * @return void
     */
    public function up()
    {
        //This table holds the relationship between users and their status.
        Schema::create('UserStatus', function(Blueprint $table)
        {
            $table->unsignedInteger('userID');
            $table->unsignedInteger('statusID');

            $table->foreign('userID')
                  ->references('userID')->on('User')
                  ->onDelete('no action')
                  ->onUpdate('no action');

            $table->foreign('statusID')
                  ->references('statusID')->on('Status')
                  ->onDelete('no action')
                  ->onUpdate('no action');
        });
    }

    /**
     * Reverse the UserStatus table migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('UserStatus');
    }
}
