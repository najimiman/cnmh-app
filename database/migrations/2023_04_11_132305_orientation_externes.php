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
            $table->string('objet');
            $table->string('description');
            $table->string('remarque');
            $table->date("date_orientation");

            $table->foreign('id_accompagnateur')
                ->references('id')->on('employes');

            $table->foreign('id_dossier')
                ->references('id')->on('dossiers_patients');

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
