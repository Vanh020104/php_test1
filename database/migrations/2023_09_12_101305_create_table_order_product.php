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
        Schema::create('order_product', function (Blueprint $table) {

            $table->unsignedDecimal("price",14,2);
            $table->unsignedSmallInteger("qty")->default(0);
            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("product_id");
            $table->timestamps();
            $table->foreign("order_id")->references("id")->on("orders");
            $table->foreign("product_id")->references("id")->on("orders");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};
