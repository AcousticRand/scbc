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
        Schema::create('blueprint_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blueprint_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('qty_required')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blueprint_ingredients');
    }
};
