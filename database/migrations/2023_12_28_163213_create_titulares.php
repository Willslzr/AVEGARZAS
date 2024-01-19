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
            $table->integer('usuario_id')->nullable();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('email')->nullable();
            $table->smallInteger('manzana');
            $table->smallInteger('casa');
            $table->bigInteger('telefono')->nullable();
            $table->integer('cedula')->nullable();
            $table->date('fecha_de_nacimiento')->nullable();
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
