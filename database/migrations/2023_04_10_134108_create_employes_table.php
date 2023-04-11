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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etat_civil_id')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->string('adresse');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->enum('sexe',["masculin","feminin"]);
            $table->string('cin');
            $table->string('fonction');
            $table->date('date_embauche');
            $table->date('date_depart')->nullable();
            $table->boolean('statut');
            $table->foreign('etat_civil_id')->references('id')->on('etat_civil')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
