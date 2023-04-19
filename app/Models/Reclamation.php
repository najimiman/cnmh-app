<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
class Reclamation extends Model
{
    use HasFactory;    public $table = 'reclamations';

    public $fillable = [
        'patients_id',
        'objet',
        'description',
        'date_reclamation'
    ];

    protected $casts = [
        'objet' => 'string',
        'description' => 'string',
        'remarques' => 'string',
        'date_reclamation' => 'datetime'
    ];

    public static array $rules = [
        'patients_id' => 'required',
        'objet' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'remarques' => 'required|string|max:255',
        'date_reclamation' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function patients(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patients_id');
    }
}
