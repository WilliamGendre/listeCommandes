<?php

require_once('../config/config.php');

session_start();

if($_SESSION['username'] !== "will"){
    header("Location: http://localhost/blog/views/adminConnexion.php");
}

function isRequestPost(){
    return $_SERVER["REQUEST_METHOD"]==="POST";
}

function dataNoValids(){
    $noValid = [];
    if(mb_strlen($_POST['title'], 'UTF-8') < 2){
        $noValid[] = "Le titre doit faire plus de 2 caractères";
    }
    if(mb_strlen($_POST['content'], 'UTF-8') < 10){
        $noValid[] = "Le contenu re doit faire plus de 10 caractères";
    }    
    if(mb_strlen($_POST['image'], 'UTF-8') < 5){
        $noValid[] = "L'image doit faire plus de 5 caractères";
    }
    if(!str_ends_with($_POST['image'], '.jpeg') && !str_ends_with($_POST['image'], '.png')){
        $noValid[] = "Le format de l'image n'est pas bon";
    }

    return $noValid;
}

// function isFormDataValid($data){

//     if(
//         !empty(trim($data['title'])) && 
//         !empty(trim($data['content'])) && 
//         !empty(trim($data['image'])) &&
        
//         mb_strlen($data['title'], 'UTF-8') > 2  &&
//         mb_strlen($data['content'], 'UTF-8') > 10 &&
//         mb_strlen($data['image'], 'UTF-8') > 5 &&
//         (str_ends_with($data['image'], '.jpeg') || str_ends_with($data['image'], '.png'))){

//         return true;

//     } else {
//         return false;
//     }
// }

if(isRequestPost()){
    if(empty(dataNoValids())){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $image = $_POST['image'];
        $creatAt = new DateTime();

        $baseDeDonne = "l'aricle " . $title . " à bien été créé le " . $creatAt -> format("d/m/Y") . ".\n";
        
        $handle = fopen("../article.txt", "a");
        
        if($handle){
            fwrite($handle, $baseDeDonne);
        
            fclose($handle);
        }   
    }

// echo "<p>" . $title . "</p>";
// echo "<p>" . $content . "</p>";
// echo "<img src=" . $image . " alt='image'>";
}