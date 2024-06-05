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
            $table->integer('entreprise_id');
            $table->string('nom');
            $table->string('pays');
            $table->string('ville');
            $table->text('adresse');
            $table->string('gps');
            $table->text('description');
            $table->date('date_event');
            $table->string('heur_debut');
            $table->string('heur_fin');
            $table->timestamps();

            $table->foreign('entreprise_id')->references('id')->on('entreprises');
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
