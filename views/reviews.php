<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/reviewsController.php'); ?>
<?php require_once('../partiels/header.php'); ?>

<main>

    <section id='rvw'>

        <h2 id="titreReviews">reviews</h2>

        <?php foreach($reviews as $review){
            echo "<article><div id='review'><p>Utilisateur: " . $review['user'] . "</p><p>Note: " . $review['rating'] . "/5</p></div><p  class='message'>Message:</p><p class='message'>" . $review['message'] . "</article>";
        } ?>

    </section>

    <?php require_once('../partiels/horaire.php'); ?>

</main>

<?php require_once('../partiels/footer.php'); ?>