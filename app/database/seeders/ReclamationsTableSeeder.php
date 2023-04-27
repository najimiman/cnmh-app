<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReclamationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Reclamation::factory(8)->create();
    }
}
