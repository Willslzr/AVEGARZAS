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
        Schema::create('habitantes', function (Blueprint $table) {
            $table->id();
            $table->integer('titular_id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('cedula');
            $table->smallInteger('casa');
            $table->smallInteger('manzana');
            $table->date('fecha_de_nacimiento');
            $table->string('relacion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitantes');
    }
};
