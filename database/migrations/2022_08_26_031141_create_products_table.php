<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('barcode', 18)->nullable()->default(0);
            $table->string('name', 100)->nullable()->default(0);
            $table->string('slug', 100)->unique();
            $table->integer('purchase_price')->nullable()->default(0);
            $table->integer('price')->nullable()->default(0);
            $table->integer('stock_toko')->nullable()->default(0);
            $table->integer('stock_gudang')->nullable()->default(0);
            $table->foreignId('stock_id');
            $table->foreignId('gudang_id');
            $table->foreignId('category_id');
            $table->foreignId('merk_id');
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
        Schema::dropIfExists('products');
    }
}
