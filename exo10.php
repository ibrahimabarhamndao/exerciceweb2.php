<?php
$employes = [
    [
        "nom" => "Moussa",
        "poste" => "Développeur",
        "salaire" => 400000
    ],
    [
        "nom" => "Awa",
        "poste" => "Designer UI/UX",
        "salaire" => 450000
    ],
    [
        "nom" => "Amadou",
        "poste" => "Scrum Master",
        "salaire" => 500000
    ]
];

$salaire_total = 0;

$employe_max = $employes[0];

foreach ($employes as $employe) {
    $salaire_total = $salaire_total + $employe["salaire"];

    if ($employe["salaire"] > $employe_max["salaire"]) {
        $employe_max = $employe; 
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10 - Liste des Employés</title>
    <style>
        table {
            width: 10%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #000000;
            color: white;
        }
        tr {
            background-color: #f9f9f9;
        }
        .information {
            background-color: #e7f3fe;
            margin-bottom: 15px;
            padding: 10px;
            width: 9%;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

    <h2>Liste des Employés</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Poste</th>
                <th>Salaire (FCFA)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employes as $employe) : ?>
                <tr>
                    <td><?php echo $employe["nom"]; ?></td>
                    <td><?php echo $employe["poste"]; ?></td>
                    <td><?php echo $employe["salaire"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="information">
        <p><strong>Masse salariale totale :</strong> <?php echo $salaire_total; ?></p>
        <p><strong>Salaire le plus élevé :</strong> <?php echo $employe_max["nom"]; ?> (<?php echo $employe_max["poste"]; ?>) avec <?php echo $employe_max["salaire"]; ?></p>
    </div>

</body>
</html>