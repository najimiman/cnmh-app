<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
class Project extends Model
{
    use HasFactory;    public $table = 'projects';

    public $fillable = [
        'name',
        'description'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255|string|max:255',
        'description' => 'required|string|max:255|string|max:255',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable'
    ];

    public function tasks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Task::class, 'project_id');
    }
}
