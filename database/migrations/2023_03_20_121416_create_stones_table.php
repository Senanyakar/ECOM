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
        Schema::create('stones', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('keywords');
            $table->string('type')->nullable();
            $table->string('comment')->nullable();
            $table->string('material')->nullable();
            $table->string('image')->nullable();
            $table->string('size')->nullable();
            $table->float('price')->nullable();
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
        Schema::dropIfExists('stones');
    }
};
