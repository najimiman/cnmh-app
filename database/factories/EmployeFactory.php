<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\EtatCivil;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

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
            'etat_civil_id' => $this->faker->randomElement(EtatCivil::pluck('id')),
            'nom' => $this->faker->name,
            'prenom' => $this->faker->name,
            'email' => $this->faker->email,
            'telephone' => $this->faker->numerify('0##########'),
            'adresse' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'date_naissance' => $this->faker->date('Y-m-d'),
            'lieu_naissance' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'sexe' => $this->faker->randomElement(["masculin","feminin"]),
            'cin' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'fonction' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'date_embauche' => $this->faker->date('Y-m-d'),
            'date_depart' => $this->faker->date('Y-m-d'),
            'statut' => $this->faker->boolean,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
