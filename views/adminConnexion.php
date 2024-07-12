<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion admin</title>
    <link rel="stylesheet" href="../assets/styleConnexion.css">
</head>
<body>
    <form method="post">

        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="motDePasse">Mot de passe</label>
            <input type="text" name="motDePasse" id="motDePasse">
        </div>

        <input type="submit">
    </form>

    <?php

    require_once("../controller/adminConnexionController.php");
    
    if(isRequestPost()){
        if($_POST['username'] === "will" &&
        $_POST['motDePasse'] === "test"){

            logUser();

            redirectToAdmin();

        } else{
            echo "<p>Il y a une erreure</p>";
        }
    }
    
    ?>
</body>
</html>