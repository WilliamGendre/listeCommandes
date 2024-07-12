<?php require_once('../config/config.php'); ?>
<?php require_once('../controller/productController.php'); ?>
<?php require_once('../partiels/header.php'); ?>

<main>

    <div>

        <form action="" id="choix">
            <div class="choixProduct">
            <label for="category">Catégorie</label>
            <select name="category" id="category">
                <option value="">Défault</option>
                <?php 
                
                    foreach($tabCategorys as $tabCategory){
                        echo "<option value=" . $tabCategory . ">" . $tabCategory . "</option>";
                    }
                
                ?>
            </select>
            </div>

            <p>Prix:</p>

            <div class="choixProduct">
            <label for="priceMin">minimum</label>
            <input type="number" name="priceMin" min="<?php echo $productPriceMin; ?>" max="<?php echo $productPriceMax; ?>">
            </div>

            <div class="choixProduct">
            <label for="priceMax">maximum</label>
            <input type="number" name="priceMax" min="<?php echo $productPriceMin; ?>" max="<?php echo $productPriceMax; ?>">
            </div>

            <div class="choixProduct">
                <label for="sort">Trier:</label>
                <select name="sort" id="">
                    <option value="">Défault</option>
                    <option value="price">Prix</option>
                    <option value="date">Date</option>
                </select>
            </div>

            <input type="submit" id="submit">
            <button><a href="http://localhost/blog/views/product.php">Refresh</a></button>
        </form>

        <section id="listProduct">
            <?php
        
            foreach($products as $product){ 
                echo "<article>
                <h2>" . $product['name'] . "</h2>
                <p>Prix: " . $product['price'] . "</p>
                <p>Catégorie: " . $product['category'] . "</p>
                <p>Description: " . $product['description'] . "</p>";

                $createAtDateTime = new DateTime($product['createdAt']);
                echo "<p>Date de création: " . $createAtDateTime -> format('d/m/Y') . "</p></article>";
            }
        
            ?>
        </section>

    </div>

    <?php require_once('../partiels/horaire.php') ?>

</main>

<?php require_once('../partiels/footer.php'); ?>