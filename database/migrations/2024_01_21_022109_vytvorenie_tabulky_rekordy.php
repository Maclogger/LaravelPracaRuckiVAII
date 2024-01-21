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
        Schema::create('rekordy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_autora_rekordu');
            $table->unsignedBigInteger('id_cesty');
            $table->timestamps();
            $table->time('cas');
            // Definovanie cudzích kľúčov
            $table->foreign('id_autora_rekordu')->references('id')->on('uzivatelia')->onDelete('cascade');
            $table->foreign('id_cesty')->references('id')->on('cesty')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekordy');
    }
};
