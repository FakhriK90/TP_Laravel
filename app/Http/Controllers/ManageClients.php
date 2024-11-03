<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ManageClients extends Controller
{
    public function show($id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Clients::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données de la requête
        $validatedData = $request->validate([
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'email' => 'required|email|unique:clients,email,' . $id,
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'required|string|max:50',
        ]);

        // Récupérer l'enregistrement de la BD
        $client = Clients::findOrFail($id);

        // Mettre à jour les données
        $client->update($validatedData);

        // Rediriger avec un message de succès
        return redirect()->route('clients.show', $client->id)->with('success', 'Client mis à jour avec succès.');
    }

    public function destroy($id)
    {
        // Récupérer l'enregistrement de la BD
        $client = Clients::findOrFail($id);

        // Supprimer l'enregistrement
        $client->delete();

        // Rediriger avec un message de succès
        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès.');
    }
}
