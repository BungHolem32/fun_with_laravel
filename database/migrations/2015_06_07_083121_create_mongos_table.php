<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMongosTable extends Migration
{
    public function up()
    {
        Schema::create('mongos', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('position', false, true);
            $table->integer('real_depth', false, true);
            $table->softDeletes();

            $table->integer('lang_id', false, true)->unsigned()->nullable();
            $table->integer('page_id', false, true)->unsigned()->nullable();
            //$table->integer('lang_id', false, true)->unsigned()->nullable();
            $table->string('type', 40)->index();
            $table->string('key', 250)->index();
            $table->text('value');

            $table->foreign('parent_id')->references('id')->on('mongos')->onDelete('cascade');
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
            //$table->foreign('lang_id')->references('id')->on('languages')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('mongos', function(Blueprint $table)
        {
            Schema::dropIfExists('mongos');
        });
    }
}
