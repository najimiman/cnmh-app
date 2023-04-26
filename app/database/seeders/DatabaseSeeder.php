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
        \App\Models\User::factory(5)->create();
        $this->call([
            ProjectsTableSeeder::class,
            ProjectsTableSeeder::class,
            CouvertureMedicalTableSeeder::class,
            TypeHandicapsTableSeeder::class,
            EtatCivilsTableSeeder::class,
            EmployesTableSeeder::class,
            NiveauScolairesTableSeeder::class,
<<<<<<< HEAD
            TuteursTableSeeder::class,
            PatientsTableSeeder::class,
            EtatCivilsTableSeeder::class,
            ConsultationsTableSeeder::class,
            RendezVousesTableSeeder::class,

            
=======

>>>>>>> 18f5b5fd41ce0295c8160d8d03cdffb578572436
        ]);

    }
}
