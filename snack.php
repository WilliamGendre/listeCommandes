<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class VendorMachine{
    private $snacks;
    private $cashAmount;
    private $isOn;

    function __construct(){
        $this -> cashAmount = 0;
        $this -> isOn = false;
        $this -> snacks = [
            [
                "name" => "Snickers",
                "price" => 1,
                "quantity" => 5,
                "index" => 0,
            ],
            [
                "name" => "Mars",
                "price" => 1.5,
                "quantity" => 5,
                "index" => 1,
            ],
            [
                "name" => "Twix",
                "price" => 2,
                "quantity" => 5,
                "index" => 2,
            ],
            [
                "name" => "Bounty",
                "price" => 2.5,
                "quantity" => 5,
                "index" => 3,
            ]
        ];
    }

    public function turnOn(){
        if($this -> isOn == false){
            $this -> isOn = true;
        }
    }

    public function turnOff(){
        $heure = date('H');
        // var_dump($heure);
        if($this -> isOn == true && $heure > 8){
            $this -> isOn = false;
        }
    }

    public function buySnack($snackName){
        if($this -> isOn){
            foreach($this -> snacks as $key => $snack){
                if($snackName === $snack['name'] && $snack['quantity'] > 0){

                    $this->snacks[$key]['quantity'] = $snack['quantity'] - 1;
                    $this -> cashAmount = $this -> cashAmount + $snack['price'];
                }
            }
        }
    }

    public function shootWithFoot(){
        if($this -> isOn){

            $exist = [];

            foreach($this->snacks as  $snack){
                if(!in_array($snack['name'], $exist) && $snack['quantity']>0){
                    $exist[] = $snack;
                }
            }

            // var_dump($exist);

            if(count($exist)>0){
                $snackRandom = rand(0,count($exist) - 1);
                $randomSnacks = $exist[$snackRandom]['index'];
                $this->snacks[$randomSnacks]['quantity'] = $exist[$snackRandom]['quantity'] - 1;
            }

            $randomCashAmountNotRounded = rand(0, $this -> cashAmount * 100) / 100;
            $randomCashAmount = round($randomCashAmountNotRounded, 2);
            var_dump($randomCashAmount);

            if($this -> cashAmount > 0){
                $this -> cashAmount = round($this -> cashAmount - $randomCashAmount, 2);
            }
        }
    }
}

$vendorMachine = new VendorMachine();

$vendorMachine -> turnOn();
$vendorMachine -> buySnack('Snickers');
$vendorMachine -> buySnack('Snickers');
$vendorMachine -> buySnack('Snickers');

$vendorMachine -> buySnack('Twix');
$vendorMachine -> buySnack('Twix');
$vendorMachine -> buySnack('Twix');
$vendorMachine -> buySnack('Twix');
$vendorMachine -> buySnack('Twix');

$vendorMachine -> buySnack('Bounty');
$vendorMachine -> buySnack('Bounty');
$vendorMachine -> buySnack('Bounty');
$vendorMachine -> buySnack('Mars');
$vendorMachine -> buySnack('Mars');
$vendorMachine -> buySnack('Mars');
$vendorMachine -> buySnack('Mars');
$vendorMachine -> buySnack('Mars');
$vendorMachine -> buySnack('Mars');
$vendorMachine -> buySnack('Mars');
$vendorMachine -> buySnack('Mars');

$vendorMachine -> shootWithFoot();

//var_dump($vendorMachine);