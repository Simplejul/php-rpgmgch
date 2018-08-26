<?php
require_once ("User.php");
require_once ("Product.php");

    class Client extends User
    {
        private $cart=[];
        private $billAmount;

        public function buy($product) {
            array_push($this->cart,$product);
            return $this->billAmount += $product->getPrice();
        }

        public function addProductToCart($product){
            return array_push($this->cart,$product);
        }

        public function getCart(){
            return $this->cart;
            //return implode(", ", $this->cart);
        }
        public function getBillAmount(){
            return $this->billAmount;
        }
    }
    

?>