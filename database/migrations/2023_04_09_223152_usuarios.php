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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUsuario')->nullable(false);
            $table->string('apellidoUsuario')->nullable(false);
            $table->date('fechaNacimiento')->nullable(false);
            $table->string('direccionUsuario');
            $table->string('correo')->unique()->nullable(false);
            $table->string('contraseña', 60)->nullable(false);
            $table->string('telefono');
            $table->integer('documentoIdentidad')->nullable(false);
            $table->unsignedBigInteger('tipoUsuario_id')->nullable(false);
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('tipoUsuario_id')->references('id')->on('tiposUsuarios');
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
