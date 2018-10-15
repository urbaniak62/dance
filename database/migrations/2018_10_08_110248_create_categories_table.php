<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rock_4_tps');
            $table->string('rock_swing');
            $table->string('chacha');
            $table->string('tango');
            $table->string('Pasodoble');
            $table->string('foxtrot');
            $table->string('Rumba');
            $table->string('valse');
            $table->string('valse_lente');
            $table->string('salsa');
            $table->string('samba');
            $table->string('rock_6_tps');
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
        Schema::dropIfExists('categories');
    }
}
