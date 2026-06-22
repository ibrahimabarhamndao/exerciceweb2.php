<?php
$produits = ["Ordinateur", "Téléphone", "Imprimante"];

$message = "";

if (isset($_POST["recherche"])) {
    $recherche = $_POST["recherche"];
    $trouve = false; 

    foreach ($produits as $produit) {
        if ($produit == $recherche) {
            $trouve = true; 
        }
    }

    if ($trouve == true) {
        $message = "Produit trouvé";
    } else {
        $message = "Produit introuvable";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>

    <h2>Recherche de produit</h2>

    <form method="post">
        <input type="text" name="recherche" required>
        <button type="submit">Rechercher</button>
    </form>

    <?php if ($message != "") : ?>
        <p><strong><?php echo $message; ?></strong></p>
    <?php endif; ?>

</body>
</html>