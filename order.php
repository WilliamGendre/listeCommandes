<?php

class Order{

    private $status;

    private $productQty;

    private $totalPrice;

    private $id;

    private $customer;

    function __construct($customerName){
        $this -> status = 'en cours';
        $this -> productQty = 0;
        $this -> totalPrice = 0;
        $this -> id = uniqid();
        $this -> customer = $customerName;
    }

    public function addProduct(){
        if($this -> status === 'en cours'){
            $this -> productQty++;
            $this -> totalPrice = $this -> totalPrice + 10;
        }
    }

    public function removeProduct(){
        if($this -> productQty > 0 && $this-> totalPrice > 0 && $this -> status === 'en cours'){
            $this -> productQty--;
            $this -> totalPrice = $this -> totalPrice -10;
        }
    }

    public function pay(){
        if($this -> productQty > 0 && $this -> totalPrice > 0 && $this -> status === 'en cours'){
            $this -> status = 'payé';
        }
    }

    public function cancel(){
        if($this -> productQty > 0 && $this -> totalPrice > 0 && $this -> status === 'en cours'){
            $this -> status = 'annulé';
            $this -> productQty = 0;
            $this -> totalPrice = 0;
        }
    }
}

$order = new Order("Will");

$order -> pay();

$order -> addProduct();
$order -> addProduct();
$order -> addProduct();
$order -> addProduct();
$order -> removeProduct();
$order -> removeProduct();
$order -> removeProduct();

$order -> pay();
$order -> cancel();

$order -> addProduct();
$order -> addProduct();
$order -> removeProduct();

var_dump($order);

// Le var_dump ne fonctionne qu'avec le statue public, il faut donc passer $status en public si on veut pouvoir afficher son statue.

// var_dump($order -> status);

// $order -> pay();

// var_dump($order -> status);

// $order -> cancel();

// var_dump($order -> status);