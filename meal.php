<?php

class Meal{

    protected $size;
    protected $price;
    protected $status;
    protected $orderedAt;

    // fonction pour payé le meal, à condition qu'une commande soit passer, non payé, non livrer

    public function pay(){
        if($this -> status === "en cours de commande"){
            $this -> status = "payé";
        }
    }

    // fonction pour livrer le meal, à condition qu'une commande soit payé

    public function ship(){
        if($this -> status === "payé"){
            $this -> status = "livré";
        }
    }
}