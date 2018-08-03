<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imobiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('value', 8, 2);
            $table->string('public_place');
            $table->string('number');
            $table->string('zip_code',9);
            $table->string('neighborhood');

            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('region_id')->unsigned()->nullable();

            $table->string('complement')->nullable();
            $table->integer('count_bedroom')->nullable();
            $table->integer('count_ws')->nullable();
            $table->integer('count_convenient')->nullable();
            $table->decimal('useful_area', 8, 2)->nullable();
            $table->decimal('total_area', 8, 2)->nullable();
            $table->string('type');

            //$table->softDeletes();
            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('state_id')->references('id')->on('states');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imobiles');
    }
}
