<?php
$menus = [
    "Accueil",
    "Produits",
    "Services",
    "Contact"
];

echo "<nav>";

foreach ($menus as $menu) {
    echo '<a href="#">' . $menu . '</a>';
}

echo "</nav>";
?>