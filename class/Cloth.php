<?php

require_once ('Product.php');

class Cloth extends Product
{
    private $brand;

    public function setBrand(){
        return $this->brand = $expire;
    }
    public function getBrand(){
        return $this->brand;
    }

    public function try(){
    }
}