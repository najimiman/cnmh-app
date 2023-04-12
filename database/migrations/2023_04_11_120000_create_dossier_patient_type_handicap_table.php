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
        Schema::create('dossier_patient_type_handicap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dossier_patient_id')->constrained("dossier_patients");
            $table->foreignId('type_handicap_id')->constrained("type_handicap");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_patient_type_handicap');
    }
};
