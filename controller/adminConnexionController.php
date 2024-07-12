<?php

require_once('../config/config.php');

function isRequestPost(){
    return $_SERVER["REQUEST_METHOD"]==="POST";
}

function logUser(){

    session_start();

    $_SESSION['username'] = $_POST['username'];

}

function redirectToAdmin(){
    header("Location: http://localhost/blog/views/adminCreateArticle.php");
}