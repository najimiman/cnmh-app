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
        Schema::create('orientationExterne', function (Blueprint $table) {

            $table->id();
            $table->string('objet');
            $table->string('description');
            $table->string('remarques');
            $table->date("date_orientation");

            $table->foreign('id_accompagnateur')
                ->references('id')->on('employe')->onDelete('set null');

            $table->foreign('id_dossier')
                ->references('id')->on('dossier_patient')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
