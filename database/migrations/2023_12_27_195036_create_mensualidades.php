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
        Schema::create('mensualidades', function (Blueprint $table) {
            $table->id();
            $table->integer('titular_id');
            $table->date('mes_pagado');
            $table->decimal('monto', 10,2);
            $table->string('imagen')->nullable();
            $table->string('estado');
            $table->integer('numero_de_referencia');
            $table->timestamps();
            $table->integer('id_admin_aprob')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensualidades');
    }
};
