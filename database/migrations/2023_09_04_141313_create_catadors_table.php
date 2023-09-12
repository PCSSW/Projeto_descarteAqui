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
        Schema::create('catadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nomeCatador');
            $table->string('localAtuacao');
            $table->string('telefoneCatador');
            $table->unsignedBigInteger('disponibilidade_id');
            $table->foreign('disponibilidade_id')->references('id')->on('disponibilidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catadors');
    }
};
