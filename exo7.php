<?php
$contacts = [
    [
        "nom" => "Ali",
        "telephone" => "770000001"
    ],
    [
        "nom" => "Fatou",
        "telephone" => "770000002"
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            cursor: pointer;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

    <h2>Liste des Contacts</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) : ?>
                <tr>
                    <td><?php echo $contact["nom"]; ?></td>
                    
                    <td><?php echo $contact["telephone"]; ?></td>
                    
                    <td>
                        <button type="button">Voir</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>