<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$articles = [
    [
        'title' => 'Article 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => true,
        'author' => 'David Robert',
    ],
    [
        'title' => 'Article 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => false,
        'author' => 'David Douillet',
    ],
    [
        'title' => 'Article 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => true,
        'author' => 'David trezeguet',
    ]
];

// fonction pour mesurer la taille d'une chaine de caractère

function isStringTooLong($tooLong, $param){
    return (mb_strlen($tooLong, 'UTF-8') > $param);
}

// fonction pour couper la chaine de caratère (retourne que les 20 premiers caractères)

function cutString($cut, $param){
    return substr($cut, 0, $param);
}