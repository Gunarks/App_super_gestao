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
        Schema::create('unitys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('unity', 5);
            $table->string('description', 50);
        });

        //Adiciona o relacionamento com a tabela products
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('unity_id');
            $table->foreign('unity_id')->references('id')->on('unitys');
        });

        //Adiciona o relacionamento com a tabela product_details
        Schema::table('product_details', function (Blueprint $table) {
            $table->unsignedBigInteger('unity_id');
            $table->foreign('unity_id')->references('id')->on('unitys');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Remove o relacionamento com a tabela product_details
        Schema::table('product_details', function (Blueprint $table) {
            // Remove a fk
            $table->dropForeign('product_details_unity_id_foreign'); //[table]_[coluna]_foreign

            // Remove a coluna
            $table->dropColumn('unity_id');
        });

        //Remove o relacionamento com a tabela products
        Schema::table('products', function (Blueprint $table) {
            // Remove a fk
            $table->dropForeign('products_unity_id_foreign'); //[table]_[coluna]_foreign

            // Remove a coluna
            $table->dropColumn('unity_id');
        });

        Schema::dropIfExists('unitys');
    }
};
