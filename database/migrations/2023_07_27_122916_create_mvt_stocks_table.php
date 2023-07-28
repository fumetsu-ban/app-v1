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
        Schema::create('mvt_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entrepot_id')->constrained();
            $table->foreignId('produit_id')->constrained();
            $table->foreignId('operation_id')->constrained();
            $table->integer('qte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mvt_stocks');
    }
};
