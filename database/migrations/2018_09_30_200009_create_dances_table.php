<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('groupes');
            $table->string('categories');
            $table->string('videos')->unique();
            $table->string('points_clef');
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
        Schema::dropIfExists('dances');
    }
}
