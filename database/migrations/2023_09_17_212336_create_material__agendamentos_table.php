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
        Schema::create('material__agendamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('material_id');
            $table->foreign('material_id')->references('id')->on('materials');
            $table->unsignedBigInteger('agendamento_id');
            $table->foreign('agendamento_id')->references('id')->on('agendamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material__agendamentos');
    }
};
