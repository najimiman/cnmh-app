<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouvertureMedicalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CouvertureMedical::factory(50)->create();
       

    }
}
