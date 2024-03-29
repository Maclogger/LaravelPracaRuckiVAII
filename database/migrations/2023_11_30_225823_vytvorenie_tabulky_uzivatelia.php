<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('uzivatelia', function (Blueprint $table) {
            $table->id();
            $table->string('meno');
            $table->string('priezvisko');
            $table->string('email')->unique();
            $table->string('heslo');
            $table->string('ikonka_url')->default('images/profilovky/default.png');
            $table->unsignedBigInteger('rola')->default(2);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('rola')->references('id')->on('role')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uzivatelia');
    }
};
