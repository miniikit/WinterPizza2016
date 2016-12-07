<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_details_table', function (Blueprint $table) {
            $table->increments('details_id');   //注文明細ID
            $table->integer('order_id');    //注文ID
            $table->integer('product_id');  //商品ID
            $table->string('number');   //個数
            $table->timestamps();

            //$table->primary(['order_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_details_table');
    }
}
