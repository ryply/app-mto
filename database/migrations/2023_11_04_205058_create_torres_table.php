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
        Schema::create('torres', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->time('hora');
            $table->integer('biocida');
            $table->integer('si_es_mayor');
            $table->integer('ph');
            $table->string('valvula');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torres');
    }
};
