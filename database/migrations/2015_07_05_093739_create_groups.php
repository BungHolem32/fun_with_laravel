<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroups extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rankedgroups', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('id');
            //$table->integer('user_id')->unsigned()->nullable();
            $table->string('title')->index();
            $table->text('access_control');
            $table->timestamps();
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
	}

}
