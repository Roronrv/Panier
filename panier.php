<?php

$produit1 = ["nom" => "Livre", "prix" => 15, "quantite" => 2];
$produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
$produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];

function calculerSousTotal($produit) {
    return $produit['prix'] * $produit['quantite'];
}

$sous_total1 = calculerSousTotal($produit1);
$sous_total2 = calculerSousTotal($produit2);
$sous_total3 = calculerSousTotal($produit3);

// Affichage des sous-totaux
echo "Le sous-total pour le " . $produit1['nom'] . " est de " . $sous_total1 . " €.<br>";
echo "Le sous-total pour le " . $produit2['nom'] . " est de " . $sous_total2 . " €.<br>";
echo "Le sous-total pour le " . $produit3['nom'] . " est de " . $sous_total3 . " €.<br>";

$total_panier = $sous_total1 + $sous_total2 + $sous_total3;
echo "Le total du panier est de " . $total_panier . " €.<br>";

if ($total_panier > 50) {
    $reduction = $total_panier * 0.10;
    $total_apres_reduction = $total_panier - $reduction;
    echo "Une réduction de 10% a été appliquée. Le total après réduction est de " . $total_apres_reduction . " €.<br>";
}

echo "<h2>Détail du panier :</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Nom du produit</th><th>Prix unitaire (€)</th><th>Quantité</th><th>Sous-total (€)</th></tr>";
echo "<tr><td>" . $produit1['nom'] . "</td><td>" . $produit1['prix'] . "</td><td>" . $produit1['quantite'] . "</td><td>" . $sous_total1 . "</td></tr>";
echo "<tr><td>" . $produit2['nom'] . "</td><td>" . $produit2['prix'] . "</td><td>" . $produit2['quantite'] . "</td><td>" . $sous_total2 . "</td></tr>";
echo "<tr><td>" . $produit3['nom'] . "</td><td>" . $produit3['prix'] . "</td><td>" . $produit3['quantite'] . "</td><td>" . $sous_total3 . "</td></tr>";
echo "<tr><td colspan='3'><strong>Total du panier</strong></td><td><strong>" . $total_panier . " €</strong></td></tr>";

// Affichage du total 
if ($total_panier > 50) {
    echo "<tr><td colspan='3'><strong>Total après réduction</strong></td><td><strong>" . $total_apres_reduction . " €</strong></td></tr>";
}

echo "</table>";

?>
