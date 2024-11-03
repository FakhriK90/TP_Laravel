<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/signinup.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>


<main>
<div id="container">
<form action="{{ route('SaveClients.store') }}" method="POST">
    @csrf
    <img src="https://bit.ly/2tlJLoz"><br>
    <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="text" name="prenom" placeholder="Prénom" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="telephone" placeholder="Téléphone"><br>
    <input type="text" name="adresse" placeholder="Adresse" required><br>
    <input type="submit" value="SIGN IN"><br>
</form>
</div>
</main>




</table>
</body>
</html>