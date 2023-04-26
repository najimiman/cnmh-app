<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Consultation;
use App\Models\EtatCivil;
use App\Models\NiveauScolaire;
use App\Models\Patient;
use App\Models\RendezVous;
use App\Models\Tuteur;
use Illuminate\Database\Seeder;
use Symfony\Component\Uid\NilUuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProjectsTableSeeder::class,
            CouvertureMedicalTableSeeder::class,
            TypeHandicapsTableSeeder::class,
            EtatCivilsTableSeeder::class,
            EmployesTableSeeder::class,
            NiveauScolairesTableSeeder::class,
            TuteursTableSeeder::class,
            PatientsTableSeeder::class,
            EtatCivilsTableSeeder::class,
            ConsultationsTableSeeder::class,
            RendezVousesTableSeeder::class,

            
        ]);

    }
}
