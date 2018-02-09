<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuAndOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $t){
            $t->increments('id');
            $t->string('dish');
            $t->integer('price');
            $t->timestamps();
             });

        Schema::create('orders', function (Blueprint $t){
            $t->increments('id');
            $t->string('name');
            $t->string('email');
           $t->string('order'); 
           $t->string('adress');
            $t->integer('total');
            $t->timestamps();
             });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu');
        Schema::drop('orders');
    }
}
