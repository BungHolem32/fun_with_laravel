<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Translation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('translations', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('id');
            /*$table->string('module')->index();
            $table->string('lang_id')->index();
            $table->string('lang_key')->index();
            $table->string('value');*/

            $table->string('lang_key')->index();
            $table->string('en');
            $table->string('de');
            $table->string('ru');
            $table->string('fr');
            $table->string('cn');
            $table->string('it');
            $table->string('ar');
            $table->string('es');
            $table->string('ja');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('translations');
	}

}
