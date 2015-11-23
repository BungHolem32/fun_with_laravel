<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('position', false, true);
            $table->integer('real_depth', false, true);
            $table->softDeletes();

            //$table->string('title', 250);
            //$table->string('slug')->index();

            $table->boolean('visible');
            $table->boolean('active');

            $table->timestamp('published_at');
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('pages')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('pages', function(Blueprint $table)
        {
            Schema::dropIfExists('pages');
        });
    }
}

