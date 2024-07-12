<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Pizza {
    private $price;
    private $status;
    private $size;
    private $base;
    private $ingredient1;
    private $ingredient2;
    private $ingredient3;
    private $orderedAt;

    function __construct($size, $base, $ingredient1, $ingredient2, $ingredient3){
        $this -> status = "en cours de commande";
        $this -> size = $size;
        $this -> base = $base;
        $this -> ingredient1 = $ingredient1;
        $this -> ingredient2 = $ingredient2;
        $this -> ingredient3 = $ingredient3;
        $this -> orderedAt = new DateTime('NOW');

        // Prix en fonction de la taille de la pizza

        if($size ==='s'){
            $this -> price = 8;
        }

        if($size === 'm'){
            $this -> price = 10;
        }
        
        if($size === 'l'){
            $this -> price = 12;
        }
        
        if($size === 'xl'){
            $this -> price = 14;
        }
    }

    // fonction pour payé la pizza, à condition qu'une commande soit passer, non payé, non livrer

    public function pay(){
        if($this -> status === "en cours de commande"){
            $this -> status = "payé";
        }
    }

    // fonction pour livrer la pizza, à condition qu'une commande soit payé

    public function ship(){
        if($this -> status === "payé"){
            $this -> status = "livré";
        }
    }
}

$pizzaWill = new Pizza('xl', 'tomate', 'mergez', 'mozzarella', 'viande haché');
$pizzaWill -> pay();
$pizzaWill -> ship();

var_dump($pizzaWill);