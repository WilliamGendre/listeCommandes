<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/listeCommandesController.php'); ?>
<?php require_once('../partiels/header.php'); ?>

<main>

    <section id="listeCommande">

        <?php foreach($orders as $order){

            $dateCommande = new DateTime($order["date"]); ?>
    
            <article>
                <p>id commande: <?php echo $order["id"] ?> </p>
                <h2>Client: <?php echo $order["customer"]  ?> </h2>
                <p>Prix de la commande: <?php echo $order["amount"] ?> </p>
                <p>Produit: 
                    <ul>
                        <?php foreach($order["products"] as $product){
                            echo "<li>" . $product . "</li>";
                        } ?>
                    </ul>    
                </p>
                <p>Date de commande: <?php echo $dateCommande -> format("d/m/Y") ?> </p>
            </article>
                        
        <?php } ?>

    </section>

    <?php require_once('../partiels/horaire.php') ?>

</main>

<?php require_once('../partiels/footer.php'); ?>