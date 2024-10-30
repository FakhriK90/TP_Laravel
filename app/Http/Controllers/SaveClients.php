<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class SaveClients extends Controller
{
    public function store(Request $request)
    {
        // Valider les données de la requête
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'email' => 'required|email|unique:clients,email',
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'required|string|max:50',
        ]);

        Clients::created($validatedData);



        // Retourner une réponse appropriée
        return redirect()->route('Clients.index')->with('success', 'Client ajouté avec succès.');
    }
}