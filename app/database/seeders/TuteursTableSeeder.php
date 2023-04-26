<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TuteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tuteur::factory(8)->create();
    }
}
