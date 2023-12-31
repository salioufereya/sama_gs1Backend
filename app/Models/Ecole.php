<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ecole extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function niveaux(): BelongsToMany
    {
        return $this->belongsToMany(Niveau::class, 'niveau_ecole', 'ecole_id', 'niveau_id');
    }
}
