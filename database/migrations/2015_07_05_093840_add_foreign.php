<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeign extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::table('rankedgroups', function(Blueprint $table)
		{
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
		});*/

        Schema::table('users', function(Blueprint $table)
        {
            $table->foreign('group_id')->references('id')->on('rankedgroups')->onDelete('set null');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rankedgroups', function(Blueprint $table)
		{
            Schema::drop('rankedgroups');
		});

        Schema::table('users', function(Blueprint $table)
        {
            Schema::drop('users');
        });
	}

}
