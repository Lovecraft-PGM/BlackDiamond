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
        Schema::create('bodegas_has_productos', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidadProducto');
            $table->unsignedBigInteger('bodega_id')->nullable(false);
            $table->unsignedBigInteger('producto_id')->nullable(false);
            $table->foreign('bodega_id')->references('id')->on('bodegas');
            $table->foreign('producto_id')->references('id')->on('Productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodegas_has_productostarios');
    }
};