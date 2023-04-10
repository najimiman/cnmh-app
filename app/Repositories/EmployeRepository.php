<?php

namespace App\Repositories;

use App\Models\Employe;
use App\Repositories\BaseRepository;

class EmployeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'etat_civil_id',
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'cin',
        'fonction',
        'date_embauche',
        'date_depart',
        'statut'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Employe::class;
    }
}
