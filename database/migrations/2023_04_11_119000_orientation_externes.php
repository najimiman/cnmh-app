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
        Schema::create('orientation_externes', function (Blueprint $table) {

            $table->id();
            // foregin key with constrained keywords
            $table->foreignId('dossier_patient_id')->constrained('dossier_patients');
            $table->foreignId('service_id')->constrained('service');
            $table->string('objet');
            $table->string('description');
            $table->string('remarque');
            $table->date("date_orientation");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orientation_externes');
    }
};
