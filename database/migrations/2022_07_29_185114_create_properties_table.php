<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('category')->nullable();
            $table->string('keywords');
            $table->longText('amenities')->nullable();
            $table->string('description')->nullable();
            $table->string('propertytype')->nullable();
            $table->string('videolink')->nullable();
            $table->string('price')->nullable();
            $table->text('location')->nullable();
            $table->longtext('locationlink')->nullable();
            $table->string('status')->nullable();
            $table->string('area')->nullable();
            $table->string('baths')->nullable();
            $table->string('beds')->nullable();
            $table->string('garage')->nullable();
            $table->string('moneytype')->nullable();
            $table->string('sahibindenlink')->nullable();
            $table->string('gallery')->nullable();
            $table->string('image')->nullable();
            $table->string('floorplans')->nullable();

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
        Schema::dropIfExists('properties');
    }
}
