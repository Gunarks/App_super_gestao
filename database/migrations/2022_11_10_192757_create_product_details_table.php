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
        Schema::create('product_details', function (Blueprint $table) {
            //Colunas
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('product_id');
            $table->float('length', 8, 2);
            $table->float('width', 8, 2);
            $table->float('heigth', 8, 2);

            //Constraint
            $table->foreign('product_id')->references('id')->on('products');
            $table->unique('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
};
