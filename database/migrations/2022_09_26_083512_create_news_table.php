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
        Schema::create('news', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->foreignId('user_id');
            $table->string('keyword');
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('category')->nullable();
            $table->string('description')->nullable();
            $table->longText('content1')->nullable();
            $table->longText('content2')->nullable();
            $table->longText('ref1')->nullable();
            $table->longText('ref1auther')->nullable();
            $table->longText('ref2')->nullable();
            $table->longText('ref2auther')->nullable();
            $table->string('image')->nullable();


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
        Schema::dropIfExists('news');
    }
};
