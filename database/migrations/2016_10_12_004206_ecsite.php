<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ecsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pizza', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('hot');
          $table->string('img');
          $table->string('description');
          $table->string('by');
          $table->unsignedinteger('price');
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
        //
    }
}
