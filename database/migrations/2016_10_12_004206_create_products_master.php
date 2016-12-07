<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products_master', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');   //商品名
          $table->string('hot');    //辛さ
          $table->string('img');    //画像
          $table->string('description');    //商品説明
          $table->string('by');     //製作者
          $table->unsignedinteger('price');     //価格
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
        Schema::dropIfExists('products_master');
    }
}
