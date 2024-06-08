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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('pays');
            $table->string('ville');
            $table->string('quartier');
            $table->text('adresse');
            $table->string('gps');
            $table->text('description');
            $table->string('date');
            $table->string('heur_debut');
            $table->string('heur_fin');
            $table->integer("entreprise_id");
            $table->foreign("entreprise_id")->references("id")->on("entreprises");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
