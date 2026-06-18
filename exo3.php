<?php
$user = [
    "nom" => "Diallo",
    "prenom" => "Awa",
    "email" => "awa@gmail.com"
];
?>


























<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Carte HTML</title>
    <style>
        .carte {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 20px auto;
        }
        .carte p {
            margin: 8px 0;
            font-size: 16px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="carte">
        <p><span class="label">Nom :</span> <?php echo $user['nom']; ?></p>
        <p><span class="label">Prénom :</span> <?php echo $user['prenom']; ?></p>
        <p><span class="label">Email :</span> <?php echo $user['email']; ?></p>
    </div>

</body>
</html>