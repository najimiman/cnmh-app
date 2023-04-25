<?php

namespace Database\Factories;

use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\EtatCivil;

class TuteurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tuteur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $etatCivil = EtatCivil::first();
        if (!$etatCivil) {
            $etatCivil = EtatCivil::factory()->create();
        }

        return [
            'etat_civil_id' => $this->faker->word,
            'nom' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'prenom' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'sexe' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'telephone' => $this->faker->numerify('0##########'),
            'email' => $this->faker->email,
            'adresse' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'cin' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'remarques' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
