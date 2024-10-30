<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    // Définir la table associée au modèle
    protected $table = 'clients';

    // Définir les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'nom', 'prenom', 'email', 'telephone', 'adresse',
    ];
}