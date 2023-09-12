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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->time('horario');
            $table->date('dia');
            $table->int('avaliacao');
            $table->unsignedBigInteger('civil_id');
            $table->foreign('civil_id')->references('id')->on('civils');
            $table->unsignedBigInteger('catador_id');
            $table->foreign('catador_id')->references('id')->on('catadors');
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
