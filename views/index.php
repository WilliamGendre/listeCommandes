<?php

require_once('../config/config.php');
require_once('../controller/indexController.php');

// echo "<head>";

//     echo "<link rel = 'stylesheet' href = '../assets/style.css'>";  

// echo "</head>";

// echo "<body>";

    // var_dump($articles);
    // var_dump($_SERVER);

    require_once('../partiels/header.php');

    echo "<main>";

        echo "<div>";

            foreach ($articles as $article){
                echo "<article>";

                    if($article['isPublished'] && $article['author'] === "David trezeguet"){

                        echo "<h2 id='article'>" . $article["title"] . "</h2>";

                        $param = 35;

                        // utilisation de la fonction (if (fonction(chaine de caractère à mesurer)))

                        if(isStringTooLong($article["content"], $param)){

                            // utilisation de la fonction (echo "<p>" . fonction(chaine de caractère à afficher) . " ...</p>")

                            echo "<p>" . cutString($article["content"], $param) . " ...</p>";

                        } else{

                            echo "<p>" . $article["content"] . "</p>";
                        }
                        echo "<img src=" . $article["img"] . ">";
                        echo "<p> Auteur: " . $article["author"] . "</p>"; 

                    }

                echo "</article>";
            }

        echo "</div>";

        require_once('../partiels/horaire.php');

    echo "</main>";

    require_once('../partiels/footer.php');

// echo "</body>";