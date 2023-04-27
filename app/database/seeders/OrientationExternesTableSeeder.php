<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrientationExternesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\OrientationExterne::factory(8)->create();
    }
}
