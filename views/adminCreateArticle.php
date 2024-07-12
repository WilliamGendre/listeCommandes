<?php require_once('../config/config.php'); ?>

<?php require_once('../partiels/header.php'); ?>

<?php require_once('../controller/adminCreateArticleController.php'); ?>

<main>

    <div>

        <form method="post">
            <label for="title">Nom de l'article</label>
            <input type="text" id="title" name="title">
            <label for="content">Description</label>
            <textarea rows="8" cols="50" name="content" id="content"></textarea>
            <label for="image">Image</label>
            <input type="text" id="image" name="image"><br>
            <input type="submit"><br>
        </form>

        <?php if(isRequestPost()){
            if(empty(dataNoValids())){
                echo "<p>Votre article à bien été créé</p>";
            } else{
                foreach(dataNoValids() as $noValid){
                    echo "<p>" . $noValid . "</p>";
                }
        } 
        } ?>

    </div>

    <?php require_once('../partiels/horaire.php'); ?>

</main>

<?php require_once('../partiels/footer.php'); ?>