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
        Schema::create('dossier_patient_cunsultation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dossier_patient_id')->constrained('dossier_patients');;
            $table->string('etat');
            $table->date('date_enregistrement');
            $table->date('date_consultation');
            $table->string('observation');
            $table->string('diagnostic');
            $table->string('bilan');
            $table->string('remarque');  




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_patient_cunsultation');
    }
};
