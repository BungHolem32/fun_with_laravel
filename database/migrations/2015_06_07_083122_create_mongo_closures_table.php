<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMongoClosuresTable extends Migration
{
    public function up()
    {
        Schema::create('mongo_closure', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('closure_id');

            $table->integer('ancestor', false, true);
            $table->integer('descendant', false, true);
            $table->integer('depth', false, true);

            $table->foreign('ancestor')->references('id')->on('mongos')->onDelete('cascade');
            $table->foreign('descendant')->references('id')->on('mongos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('mongo_closure', function(Blueprint $table)
        {
            Schema::dropIfExists('mongo_closure');
        });
    }
}
