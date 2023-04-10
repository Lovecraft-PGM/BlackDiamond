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
        Schema::create('carritosC_has_producto', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->float('subTotal');
            $table->unsignedBigInteger('carritoCompra_id')->nullable(false);
            $table->unsignedBigInteger('producto_id')->nullable(false);
            $table->foreign('carritoCompra_id')->references('id')->on('carritosCompras');
            $table->foreign('producto_id')->references('id')->on('Productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carritosC_has_producto');
    }
};