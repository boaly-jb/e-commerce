<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('store_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_slug')->nullable();
            $table->decimal('product_price', 10, 2);
            $table->decimal('sale_price', 10, 2);
            $table->string('sku')->nullable();
            $table->integer('quantity')->default(0);
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('featured')->nullable()->default(0);
            $table->boolean('tranding')->nullable()->default(0);
            $table->string('product_image')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_products');
    }
};
