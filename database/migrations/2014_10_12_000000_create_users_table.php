<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
            $table->integer('group_id')->unsigned()->nullable();
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
		});

        DB::statement(
            "INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
            VALUES
            (1, 'Rotem', 'rotemg@rboptions.com', '$2y$10\$kn7UH/fZxg5Riv4faz9xj.oNgUuXooHJDHRyJq2CVciBOdOWJBUt.', NULL, '2015-06-18 15:36:44', '2015-06-18 15:36:44');"
        );

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
