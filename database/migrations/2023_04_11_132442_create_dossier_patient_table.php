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
        Schema::create('dossier_patient', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_dossier');
            $table->string('etat');
            $table->string('date_enregsitrement');
            $table->foreign('couverture_medical_id')->references('id')->on('couverture_medical');
            $table->foreign('patient_id')->references('id')->on('patient');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_patient');
    }
};
