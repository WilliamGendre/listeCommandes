<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_set_cookie_params(30);





// Link la base de donnée à mon PHP

$dsn = 'mysql:host=localhost:3306; dbname=piscine_php';
$username = 'root';
$password = 'root';

// test si le $dsn, le $username, le $password sont bon

try{

    // créer une instance de classe
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

// si se n'est pas bon

catch(PDOException $e){
    echo 'erreur de connexion' . $e->getMessage;
}