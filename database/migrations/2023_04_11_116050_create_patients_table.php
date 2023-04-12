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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('niveau_scolaire_id')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('cin');
            $table->string('email');
            $table->string('image');
            $table->string('adresse');
            $table->text('remarque');
            $table->foreign('parent_id')->references('id')->on('parents');
            $table->foreign('niveau_scolaire_id')->references('id')->on('niveau_scolaire');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
