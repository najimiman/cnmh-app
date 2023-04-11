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
        Schema::create('service_medcin_generals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_service')->constrained('services');
            $table->foreignId('id_medcin_generals')->constrained('medcin_generals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_medcin_generals');
    }
};
