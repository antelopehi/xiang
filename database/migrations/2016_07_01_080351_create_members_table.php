<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('mid');
            $table->integer('cid');
            $table->string('account' , 20)->unique();
            $table->string('realname' , 40);
            $table->string('password',200);
            $table->enum('type',['admin','customer']);
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('cid')->references('cid')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');

    }
}
