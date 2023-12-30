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
        Schema::create('titulares', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id');
            $table->string('nombre');
            $table->smallInteger('manzana');
            $table->smallInteger('casa');
            $table->integer('telefono');
            $table->integer('cedula');
            $table->date('fecha_de_nacimiento');
            $table->decimal('saldo_positivo',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titulares');
    }
};
