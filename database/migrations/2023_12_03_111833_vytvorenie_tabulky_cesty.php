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
        Schema::create('cesty', function (Blueprint $table) {
            $table->id();
            $table->string('nazov_cesty');
            $table->string('obrazok_url')->nullable();
            $table->text('popis')->nullable(); // New attribute for description
            $table->integer('dlzka_trasy');
            $table->string('stav_cesty');
            $table->double('vytazenost');
            $table->boolean('vhodne_pre_motorky');
            $table->boolean('vhodne_cez_zimu');
            $table->boolean('popularna_cesta');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cesty');
    }
};
