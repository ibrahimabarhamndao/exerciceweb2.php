<?php
$produits = [
    [
        "nom" => "PC Portable",
        "prix" => 350000
    ],
    [
        "nom" => "Téléphone",
        "prix" => 150000
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
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
    </style>
</head>
<body>

    <h2>Tableau des produits</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $produit) : ?>
                <tr>
                    <td><?php echo $produit["nom"]; ?></td>
                    
                    <td><?php echo $produit["prix"]; ?> FCFA</td>
                    
                    <td><?php echo $produit["prix"] * 1.18; ?> FCFA</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>