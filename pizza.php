<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./meal.php');

class Pizza extends Meal{

    private $base;
    private $ingredient1;
    private $ingredient2;
    private $ingredient3;

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

    public function getSize(){
        return 'Taille : ' . $this -> size;
    }

    public function getBase(){
        return 'Base : ' . $this -> base;
    }

    public function getIngredients(){ 
        return 'Ingrédients : ' . $this -> ingredient1 . ' / ' . $this -> ingredient2 . ' / ' . $this -> ingredient3;
    }

    public function getPrice(){
        return 'Prix de la pizza : ' . $this -> price . '€';
    }
}

// new + une classe => instance de classe exemple permet à une usine de créer un objet à partir des plans

$pizzaWill = new Pizza('xl', 'tomate', 'mergez', 'mozzarella', 'viande haché');
$pizzaWill -> pay();
$pizzaWill -> ship();

// var_dump($pizzaWill);

echo $pizzaWill -> getSize() . '<br>';
echo $pizzaWill -> getBase() . '<br>';
echo $pizzaWill -> getIngredients() . '<br>';
echo $pizzaWill -> getPrice() . '<br>';