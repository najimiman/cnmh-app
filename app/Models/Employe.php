<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
class Employe extends Model
{
    use HasFactory;    public $table = 'employe';

    public $fillable = [
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

    protected $casts = [
        'nom' => 'string',
        'prenom' => 'string',
        'email' => 'string',
        'telephone' => 'string',
        'adresse' => 'string',
        'date_naissance' => 'date',
        'lieu_naissance' => 'string',
        'sexe' => 'string',
        'cin' => 'string',
        'fonction' => 'string',
        'date_embauche' => 'date',
        'date_depart' => 'date',
        'statut' => 'boolean'
    ];

    public static array $rules = [
        'etat_civil_id' => 'nullable',
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'telephone' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'date_naissance' => 'required',
        'lieu_naissance' => 'required|string|max:255',
        'sexe' => 'required|string|max:255',
        'cin' => 'required|string|max:255',
        'fonction' => 'required|string|max:255',
        'date_embauche' => 'required',
        'date_depart' => 'nullable',
        'statut' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function etatCivil(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\EtatCivil::class, 'etat_civil_id');
    }
}
