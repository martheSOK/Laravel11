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
        Schema::create('lignes_commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('commande_id');
            $table->integer('ticket_id');
            $table->integer('quantite');
            $table->timestamps();

            $table->foreign("ticket_id")->references('id')->on('tickets');
            $table->foreign("commande_id")->references('id')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignes_commandes');
    }
};
