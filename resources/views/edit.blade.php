<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer le Client</title>
</head>
<body>
    <h1>Editer le Client</h1>
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="{{ $client->nom }}" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" value="{{ $client->prenom }}" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $client->email }}" required><br>

        <label for="telephone">Téléphone:</label>
        <input type="text" id="telephone" name="telephone" value="{{ $client->telephone }}"><br>

        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" value="{{ $client->adresse }}" required><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>