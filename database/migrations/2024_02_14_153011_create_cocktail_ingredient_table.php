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
        Schema::create('cocktail_ingredient', function (Blueprint $table) {

            //forein key di cocktail
            $table->foreignId('cocktail_id')
                ->constrained()->cascadeOnDelete();

            //forein key di ingredient
            $table->foreignId('ingredient_id')
                ->constrained()->cascadeOnDelete();

            //id create da noi
            $table->primary(["cocktail_id", "ingredient_id"]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktail_ingredient');
    }
};
