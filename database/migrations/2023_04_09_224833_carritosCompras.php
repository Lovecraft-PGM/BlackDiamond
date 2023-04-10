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
        Schema::create('carritosCompras', function (Blueprint $table) {
            $table->id();
            $table->datetime('fechaCarrito')->nullable(false);
            $table->float('valorTotal');
            $table->unsignedBigInteger('usuario_id')->nullable(false);
            $table->unsignedBigInteger('estado_id')->nullable(false);
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carritosCompras');
    }
};