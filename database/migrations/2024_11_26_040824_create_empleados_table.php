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
    Schema::create('empleados', function (Blueprint $table) {
      $table->id();
      $table->string('nombre');
      $table->string('apellido');
      $table->integer('identificacion');
      $table->string('direccion')->nullable();
      $table->integer('telefono');
      $table->string('ciudad');
      $table->string('departamento');
      $table->enum('rol', ['colaborador', 'jefe'])->nullable();
      $table->string('area')->nullable();
      $table->string('jefe')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('empleados');
  }
};
