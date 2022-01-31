<?php
    class Product {
    public $name;
    private $price;
    public $brand;

    public function __construct ($_name, $_price, $_brand) {
        $this->name = $_name;
        $this->price = $_price;
        $this->brand = $_brand;
    }
    
    public function setPrice($_price){
        $this->price = $_price;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getUserPrice($user){
        if($user->getSconto() > 0) {
            $sconto = $this->getPrice() * $user->getSconto();
            return $this-> price - $sconto;
        } else {
            return $this->getPrice();
        }
    }
    }
