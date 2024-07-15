<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./meal.php');

class HotDog extends Meal{

    private $bread;
    
    function __construct($size, $bread){
        $this -> status = 'en cours de commande';
        $this -> size = $size;
        $this -> bread = $bread;
        $this -> orderedAt = new DateTime('NOW');

        // Prix en fonction de la taille du hot dog

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

    public function getBread(){
        return 'Pain : ' . $this -> bread;
    }

    public function getPrice(){
        return 'Prix du Hot Dog : ' . $this -> price . '€';
    }
}


// new + une classe => instance de classe exemple permet à une usine de créer un objet à partir des plans

$hotdogWill = new HotDog('m', 'toaster');

echo $hotdogWill -> getSize() . '<br>';
echo $hotdogWill -> getBread() . '<br>';
echo $hotdogWill -> getPrice() . '<br>';