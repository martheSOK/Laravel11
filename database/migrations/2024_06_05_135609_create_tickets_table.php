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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->integer('template_id');
            $table->string('libelle');
            $table->integer('prix');
            $table->integer('nombre_place');
            $table->string('type');
            $table->timestamps();

            $table->foreign("template_id")->references('id')->on('templates');
            $table->foreign("event_id")->references('id')->on('evenements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
