<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders',function(Blueprint $table){
            $table->increments('oid');
            $table->integer('mid');
            $table->date('dining_dates');
            $table->enum('type',['breakfast','lunch','dinner','supper']);
            $table->integer('total')->unsigned();
            $table->boolean('paid')->default(false)->comment = '支付狀態';
            $table->timestamps();
            // $table->foreign('mid')->references('mid')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
