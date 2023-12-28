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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('cedula');
            $table->string('email')->unique();
            $table->integer('telefono');
            $table->smallInteger('manzana');
            $table->smallInteger('casa');
            $table->timestamp('verificado')->nullable();
            $table->string('password');
            $table->boolean('admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->date('fecha_de_nacimiento');
            $table->decimal('saldo_positivo', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
