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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto')->nullable(false);
            $table->string('modeloProducto');
            $table->float('precioProducto')->nullable(false);
            $table->string('descripcionProducto');
            $table->integer('cantidadProducto');
            $table->integer('numeroCompras');
            $table->integer('estrellasTotales');
            $table->float('estrellasMostrar');
            $table->integer('numeroVotos');
            $table->unsignedBigInteger('talla_id');
            $table->unsignedBigInteger('categoria_id')->nullable(false);
            $table->unsignedBigInteger('genero_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('color_id');
            $table->foreign('talla_id')->references('id')->on('tallas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('color_id')->references('id')->on('colores');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
