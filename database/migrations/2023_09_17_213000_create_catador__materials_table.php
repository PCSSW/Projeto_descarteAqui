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
        Schema::create('catador__materials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
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
        Schema::dropIfExists('catador__materials');
    }
};
