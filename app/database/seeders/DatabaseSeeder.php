<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\NiveauScolaire;
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

        ]);

    }
}
