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
        Schema::table('cesty', function (Blueprint $table) {
            // Pridanie stĺpca 'author' ako cudzí kľúč, ktorý odkazuje na 'id' v tabuľke 'uzivatelia'
            $table->unsignedBigInteger('author')->nullable();
            $table->foreign('author')->references('id')->on('uzivatelia')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cesty', function (Blueprint $table) {
            // Odstránenie cudzieho kľúča pred odstránením stĺpca
            $table->dropForeign(['author']);
            $table->dropColumn('author');
        });
    }
};
