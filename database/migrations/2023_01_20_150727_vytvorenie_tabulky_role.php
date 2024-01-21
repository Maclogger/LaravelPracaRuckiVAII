<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string('nazov_role');
            $table->timestamps();
        });

        DB::table('role')->insert([
            [
                'id' => 1,
                'nazov_role' => 'ADMIN',
                'created_at' => '2024-01-18 20:54:04',
                'updated_at' => '2024-01-18 20:54:04',
            ],
            [
                'id' => 2,
                'nazov_role' => 'STANDARD',
                'created_at' => '2024-01-18 20:54:04',
                'updated_at' => '2024-01-18 20:54:04',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role');
    }
};
