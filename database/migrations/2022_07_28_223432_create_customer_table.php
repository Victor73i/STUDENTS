<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id_customer');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();



            $table->timestamps();
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id_customer')->on('category')->onDelete("cascade");
        });
    }


    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
