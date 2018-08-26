<?php

require_once ('Product.php');

class Cloth extends Product
{
    private $brand;

    public function __construct ($i, $n, $p, $brand){
        parent::__construct($i, $n, $p);
        $this->brand = $brand;
    }

    public function setBrand(){
        return $this->brand = $brand;
    }
    public function getBrand(){
        return $this->brand;
    }

    public function try(){
    }
}