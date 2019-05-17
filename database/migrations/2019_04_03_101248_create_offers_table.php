<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_us')->unsigned();
            $table->foreign('id_us')->references('id')->on('users');
            $table->integer('id_pr')->unsigned();
            $table->foreign('id_pr')->references('id')->on('product');
            $table->decimal('price',5,2);
            $table->string('country',30);
            $table->string('description');
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
       Schema::dropIfExists('offers');
    }
}
