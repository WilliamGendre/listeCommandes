<?php require_once('../controller/listeProductsBddController.php'); 

foreach($products as $product){
    echo "<h2>" . $product['titre'] . "</h2>";
    echo "<h3>" . $product['sous_titre'] . "</h3>";
    echo "<p>" . $product['descriptions'] . "</p>";
}

?>