<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/categorieController.php'); ?>
<?php require_once('../partiels/header.php'); ?>

<main>

    <?php
    
        foreach($categories as $categorie){
            echo "<div><h3>Catégorie " . $categorie["name"] . "</h3></div>";
        }

    ?>

    <?php require_once('../partiels/horaire.php') ?>

</main>

<?php require_once('../partiels/footer.php'); ?>