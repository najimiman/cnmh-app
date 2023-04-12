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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etat_civil_id')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('telephone');
            $table->string('email');
            $table->string('adresse');
            $table->string('cin');
            $table->string('remarque');
            $table->foreign('etat_civil_id')->references('id')->on('etat_civil')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
