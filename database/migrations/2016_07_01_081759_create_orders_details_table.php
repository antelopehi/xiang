<?php

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
        Schema::create('order_details',function(Blueprint $table){
            $table->increments('odid');
            $table->integer('oid')->unsigned();
            $table->integer('medid')->unsigned();
            $table->smallInteger('quantity')->unsigned()->comment = '訂購數量';
            $table->timestamps();
            // $table->foreign('oid')->references('oid')->on('orders')->onDelete('cascade');
            // $table->foreign('medid')->references('medid')->on('menu_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
