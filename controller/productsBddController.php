<?php

require_once('../config/config.php');

// Préparer la requête d'insertion

$sql = "INSERT INTO product (titre, sous_titre, descriptions) VALUE (:titre, :sous_titre, :descriptions)";
$stmt = $pdo->prepare($sql);

// Définir les paramètres à éxécuter

$titre = 'titre';
$sous_titre = 'sous_titre';
$descriptions = 'descriptions';

$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':sous_titre', $sous_titre);
$stmt->bindParam(':descriptions', $descriptions);

// Executer la requête

if($stmt->execute()){
    echo "nouveau produit ajouté avec succès";
}else{
    echo "Erreur lors de l'ajout du produit";
}