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
        Schema::create('inventaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference')->nullable();
            $table->string('name')->nullable();
            $table->integer('cost_price')->nullable();
            $table->integer('sale_price')->nullable();
            $table->integer('quantity_available')->nullable();
            $table->string('description')->nullable();
            $table->string('toy_image')->nullable();

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
    }
};
