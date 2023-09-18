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
        Schema::create('fuites', function (Blueprint $table) {
            $table->id();
            $table->string('Nom')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('Date')->nullable();
            $table->string('Description')->nullable();
            $table->string('Photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuites');
    }
};
