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
        Schema::create('search_parameters', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("index");
            $table->string("type");
            $table->string("lowerprice");
            $table->string("higherprice");
            $table->string("starttime");
            $table->string("endtime");
            $table->string("keyword");
            $table->string("title");
            $table->string("extra");
            $table->string("extra2");
            $table->string("extra3");
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
        Schema::dropIfExists('search_parameters');
    }
};
