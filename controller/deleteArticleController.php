<?php

require_once('../config/config.php');

session_start();

if($_SESSION['username'] !== "will"){
    header("Location: http://localhost/blog/views/adminConnexion.php");
}

file_put_contents('../article.txt', '');