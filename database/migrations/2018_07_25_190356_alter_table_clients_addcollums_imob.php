<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableClientsAddcollumsImob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            
            $table->string('cpf_cnpj', 14);
            
            $table->string('profession')->nullable();
            $table->string('email2')->nullable();
            $table->string('sex',1)->nullable();
            $table->date('birth')->nullable();
            $table->decimal('income', 8, 2)->nullable();

            //Adres:
            $table->string('number')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('complement')->nullable()->nullable();

            //Details
            $table->string('region_interest')->nullable();
            $table->string('imobile_type')->nullable();
            $table->integer('dormitory_min')->nullable();
            $table->integer('dormitory_max')->nullable();
            $table->integer('wc_min')->nullable();
            $table->integer('wc_max')->nullable();
            $table->decimal('value_min', 8, 2)->nullable();
            $table->decimal('value_max', 8, 2)->nullable();
            $table->decimal('useful_area_min', 8, 2)->nullable();
            $table->decimal('useful_area_max', 8, 2)->nullable();
            $table->decimal('total_area_min', 8, 2)->nullable();
            $table->decimal('total_area_max', 8, 2)->nullable();

            //$table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
