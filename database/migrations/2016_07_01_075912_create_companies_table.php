<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('cid');
            $table->string('realname', 40)->comment = '公司名稱';
            $table->string('nickname', 8)->comment = '公司簡稱';
            $table->string('tel', 15)->nullable()->comment = '電話';
            $table->string('address', 200)->nullable()->comment = '地址';
            $table->string('unite_no', 10)->nullable()->comment = '統一編號';
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
        Schema::dropIfExists('companies');
    }
}