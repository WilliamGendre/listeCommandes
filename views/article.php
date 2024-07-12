<?php require_once('../controller/articleController.php'); ?>

<?php require_once('../partiels/header.php');?>

<main>

<?php 

if($getContent){
    echo "<div class='pArticle'><p>Il existe un fichier sauvegarder: " . $getContent . "</p></div>";
} else{
    echo "<div class='pArticle'><p'>Le fichier n'existe pas</p></div>";
}

?>

<?php require_once('../partiels/horaire.php'); ?>

</main>

<?php require_once('../partiels/footer.php'); ?>