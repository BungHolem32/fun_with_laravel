<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Languages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('languages', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('position', false, true);

            $table->string('title', 250);
            $table->string('title_native', 250);
            $table->string('code')->index();
            $table->string('code03')->index();

            $table->boolean('dir');
            $table->boolean('visible');
            $table->boolean('active');

            $table->timestamps();
        });

        DB::statement(
            "INSERT INTO `languages` (`title`, `title_native`, `code`, `code03`, `dir`, `active`, `visible`) VALUES
                ('Arabic', 'العربية', 'AR', 'ARA', 0, 1, 1),
            ('Chinese', '漢語', 'CN', 'CHI', 0, 1, 1),
            ('German', 'Deutsch', 'DE', 'GER', 0, 1, 1),
            ('English', 'English', 'EN', 'ENG', 0, 1, 1),
            ('Spanish', 'Español', 'ES', 'SPA', 0, 1, 1),
            ('French', 'Français', 'FR', 'FRA', 0, 1, 1),
            ('Italian', 'Italiano', 'IT', 'ITA', 0, 1, 1),
            ('Japanese', '日本語', 'JA', 'JPN', 0, 1, 1),
            ('Russian', 'Русский', 'RU', 'RUS', 0, 1, 1);"
        );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('languages', function(Blueprint $table)
        {
            Schema::dropIfExists('languages');
        });
	}

}
