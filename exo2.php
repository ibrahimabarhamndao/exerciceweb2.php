<?php

$etudiants = [
    "Ali",
    "Fatou",
    "Moussa",
    "Awa"
];

echo "<table border='1'>"; 

echo "<tr>";
echo "<th>Nom</th>";
echo "</tr>";

foreach ($etudiants as $etudiant) {
    echo "<tr>";
    echo "<td>" . $etudiant . "</td>";
    echo "</tr>";
}

echo "</table>";
?>