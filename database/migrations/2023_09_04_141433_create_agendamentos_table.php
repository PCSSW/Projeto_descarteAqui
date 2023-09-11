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
            $table->time('horário');
            $table->date('dia');
            $table->int('avaliacao');
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
