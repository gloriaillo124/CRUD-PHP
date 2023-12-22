<?php 
    require_once('cnx.php')
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
    <h1>Liste des Clients</h1>

    <table>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            <tr>
            <td>Julien</td>
            <td>Bidon</td>
            <td>julien.bidon@gmail.com</td>
            </tr>
            <tr>
            <td>Sophie</td>
            <td>Claire</td>
            <td>Sophie.claire@gmail.com</td>
            </tr>
        </tbody>
    </table>
            <a href="create.php">Créer un nouveau client</a>
</body>
</html>