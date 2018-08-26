<?php

class Product
{
    private $id;
    private $name;
    private $price;

    public function __construct($i, $n, $p){
        $this->id = $i;
        $this->name = $n;
        $this->price = $p;
    }

    public function setId(){
        return $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }

    public function setName(){
        return $this->name = $n;
    }
    public function getName(){
        return $this->name;
    }

    public function setPrice(){
        return $this->price = $p;
    }
    public function getPrice(){
        return $this->price;
    }
    
    public function getAll(){
        $prop = "id: ".$this->id."<br/> name: ".$this->name."<br/> price: ".$this->price;
        return $this->prop = $prop;
    }

}

?>