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
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 50)->unique();
            $table->text('description')->nullable();
            $table->float('price', 4, 2);
            $table->string('series', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('price');
            $table->dropColumn('series');
        });
    }
};
