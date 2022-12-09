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

        // Criando a tabela affiliates

        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->timeStamps();
            $table->string('affiliate', 30);
        });

        // Criando a tabela affiliate_products

        Schema::create('affiliate_products', function (Blueprint $table) {
            $table->id();
            $table->timeStamps();
            $table->unsignedBigInteger('affiliate_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('sale_price', 8, 2);
            $table->integer('maximunm_stock');
            $table->integer('minimum_stock');

            // Adicionandno as constraints
            $table->foreign('affiliate_id')->references('id')->on('affiliates');
            $table->foreign('product_id')->references('id')->on('products');
        });


        // Removendo colunas da tabela produtos
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['sale_price', 'maximunm_stock', 'minimum_stock']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        // Adicionando colunas da tabela produtos
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('sale_price', 8, 2);
            $table->integer('maximunm_stock');
            $table->integer('minimum_stock');
        });

        // Removendo a tabela affiliate_products
        Schema::dropIfExists('affiliate_products');

        // Removendo a tabela affiliates
        Schema::dropIfExists('affiliates');
    }
};
