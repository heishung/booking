<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Slide extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('slide' ,function ( Blueprint $table){
            $table->increments('id');
            $table->string('nameslide');
            $table->string('image');
            $table->string('slidecontent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
       /* Schema::dropIfExists('slide');*/
}
}
