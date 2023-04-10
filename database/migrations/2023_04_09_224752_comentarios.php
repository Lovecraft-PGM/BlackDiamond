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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->integer('estrellas');
            $table->string('textComentario',500)->nullable(false);
            $table->unsignedBigInteger('usuario_id')->nullable(false);
            $table->unsignedBigInteger('producto_id')->nullable(false);
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('producto_id')->references('id')->on('Productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
