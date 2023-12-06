<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            "email" => $this->email,
            "telephone" => $this->telephone,
            "photo" => $this->photo,
            "role" => $this->role->libelle,
            "ecole" => $this->ecole->libelle
        ];
    }
}
