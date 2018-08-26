<?php

require_once ('Product.php');

class Vegetable extends Product
{
    private $productorName;
    private $expiresAt;

    public function __construct ($i, $n, $p, $productor, $expire){
        parent::__construct($i, $n, $p);
        $this->productorName = $productor;
        $this->expiresAt = $expire;
    }

    public function setProductorName(){
        return $this->productorName = $productor;
    }
    public function getProductorName(){
        return $this->productorName;
    }

    public function setExpiresAt(){
        return $this->expiresAt = $expire;
    }
    public function getExpiresAt(){
        return $this->expiresAt;
    }
    
    public function isFresh(){
        $date1 = $expiresAt;
        $date2 = date("Y-m-d");
        $timestamp1 = strtotime($date1);
        $timestamp2 = strtotime($date2);
        if($timestamp1 == $timestamp2){
            echo "$date1 is equal to the $date2";
        }else{
            echo ($timestamp1>$timestamp2)? "stop, you'll be sick": "ok, you can";
        }

    }
}