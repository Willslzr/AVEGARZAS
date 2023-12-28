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
        Schema::create('cartas_de_pago', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->decimal('monto',10,2);
            $table->text('descripcion');
            $table->integer('aprobado_por');
            $table->decimal('caja_act',20,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartas_de_pago');
    }
};
