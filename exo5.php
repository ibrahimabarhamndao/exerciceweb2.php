<?php
$liste_prenoms = [];

$erreur = "";

if (isset($_POST["prenom"])) {
    $prenom_saisi = $_POST["prenom"];

    if ($prenom_saisi == "") {
        $erreur = "Veuillez saisir un prénom, le champ est vide !";
    } else {
        $liste_prenoms[] = $prenom_saisi;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
    <style>
        table {
            width: 5%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .erreur {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Ajouter un prénom</h2>

    <form method="post">
        <input type="text" name="prenom">
        <button type="submit">Envoyer</button>
    </form>

    <?php if ($erreur != "") : ?>
        <p class="erreur"><?php echo $erreur; ?></p>
    <?php endif; ?>

    <h3>Liste des prénoms ajoutés :</h3>

    <table>
        <thead>
            <tr>
                <th>Prénoms</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($liste_prenoms as $p) : ?>
                <tr>
                    <td><?php echo $p; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>