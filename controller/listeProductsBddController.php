<?php

require_once('../config/config.php');


// Permet de faire une requête Select sans parmètres
$stmt = $pdo->query('SELECT * FROM product');

// Retourne dans un tableau tous les produits grace au fetchAll, à ne pas confondre avec le fetch
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);