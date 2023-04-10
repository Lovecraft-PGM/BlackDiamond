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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombreprov')->nullable(false);
            $table->string('correoprov')->nullable(false);
            $table->string('direccionprov');
            $table->string('telefonoprov')->nullable(false);
            $table->string('nombreContactoPersonal');
            $table->string('telefonoContactoPersonal');
            $table->unsignedBigInteger('numCuentaProv')->nullable(false);
            $table->unsignedBigInteger('pais_id')->nullable(false);
            $table->unsignedBigInteger('departamento_id')->nullable(false);
            $table->unsignedBigInteger('municipio_id')->nullable(false);
            $table->unsignedBigInteger('estado_id')->nullable(false);
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
