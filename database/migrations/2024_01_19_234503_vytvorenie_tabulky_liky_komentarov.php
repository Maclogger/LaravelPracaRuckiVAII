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
        Schema::create('liky_komentare', function (Blueprint $table) {
            $table->unsignedBigInteger('id_autora_liku');
            $table->unsignedBigInteger('id_komentaru');
            $table->timestamps();
            // Definovanie cudzích kľúčov
            $table->foreign('id_autora_liku')->references('id')->on('uzivatelia')->onDelete('cascade');
            $table->foreign('id_komentaru')->references('id')->on('komentare')->onDelete('cascade');

            $table->primary(['id_autora_liku', 'id_komentaru']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liky_komentare');
    }
};
