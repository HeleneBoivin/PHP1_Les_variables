<!DOCTYPE HTML>
<html>
<head>
<title>Exercice5</title>
<h3>PHP - Partie 1 - Exercice 5</h3>
</head>
<body>
<p>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
Donner une valeur à cette variable et l'afficher.</p>
<?php
$prix = 0;
settype($prix, "integer");
echo '<p>Le prix est de ' . $prix . ' € </p>';  // Meilleur méthode de concaténation
$prix = 10;
echo "Le prix est de $prix €";
?>
</body
</html>
