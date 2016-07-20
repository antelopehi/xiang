<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_details',function(BluePrint $table){
            $table->increments('medid');
            $table->integer('meid')->unsigned();
            $table->smallInteger('price')->unsigned()->comment = '產品價格';
            $table->timestamp('beginning')->comment = '價格異動開始時間';
            $table->boolean('breakfast')->default(false);
            $table->boolean('lunch')->default(false);
            $table->boolean('dinner')->default(false);
            $table->boolean('supper')->default(false);
            $table->timestamps();
            // $table->foreign('meid')->references('meid')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_details');
    }
}
