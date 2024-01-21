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
        Schema::create('komentare', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cesty');
            $table->unsignedBigInteger('id_autora');
            $table->text('text');
            $table->integer('pocet_likov')->default(0);
            $table->timestamps();

            // Definovanie cudzích kľúčov
            $table->foreign('id_cesty')->references('id')->on('cesty')->onDelete('cascade');
            $table->foreign('id_autora')->references('id')->on('uzivatelia')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentare');
    }
};
