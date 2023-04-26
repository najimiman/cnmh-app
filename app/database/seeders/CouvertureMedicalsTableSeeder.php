<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouvertureMedicalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CouvertureMedical::factory(10)->create();

    }
}
