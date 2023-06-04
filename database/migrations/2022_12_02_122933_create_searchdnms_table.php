<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Title');
            $table->string('Description');
            $table->integer('price');
        });
    }
    /**
     * Reverse the migrations.
     *p
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

