<?php

$produits = ["Ordinateur", "Téléphone", "Imprimante", "Clavier"];


echo "<p>les produits sont: </p>";

echo "<ul>";
foreach ($produits as $produit) {
    echo "<li>" . $produit . "</li>";
}
echo "</ul>";

echo "<p>Nombre total de produit :</p>";

$totalProduits = count($produits);
echo "<p>le nombre total de produits est  : " . $totalProduits . "</p>";
?>