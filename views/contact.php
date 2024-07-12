<?php require_once('../config/config.php');?>
<?php require_once('../controller/contactController.php'); ?>

<!-- <body> -->

    <?php require_once('../partiels/header.php');?>

    <main>

        <div>
            <form method="post">
                <label for="name">Votre nom</label>
                <input type="text" id="name" name="name">
                <label for="email">Votre email</label>
                <input type="email" id="email" name="email">
                <label for="message">Commentaire</label>
                <textarea rows="8" cols="50" name="message" id="message"></textarea><br>
                <input type="submit"><br>
            </form>

            <?php

            if (isset($_REQUEST['name'])){
                if(checkIfFormIsValid($_REQUEST)){
                    echo "<p>Merci " . $_REQUEST["name"] . ", votre message: '" . $_REQUEST["message"] . "' à bien été enregistré. Nous vous répondrons dans les plus bref délais à l'adresse mail: " . $_REQUEST["email"] . "</p>";
                } else {
                    echo "<p>Votre demande n'est pas valide</p>";
                }
            }
            ?>
        </div>

        <?php require_once('../partiels/horaire.php'); ?>

    </main>

    <?php require_once('../partiels/footer.php'); ?>

<!-- </body> -->