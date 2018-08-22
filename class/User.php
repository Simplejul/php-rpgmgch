<?php

class User
{
    private $id;
    private $email;
    private $createdAt;

    public function __construct($i, $e, $c){
        $this->id = $i;
        $this->email = $e;
        $this->createdAt = $c;
    }

    public function setId(){
        return $this->id = $i;
    }
    public function setEmail(){
        return $this->email = $e;
    }
    public function setCreatedAt(){
        return $this->createdAt = $c;
    }
    public function get(){
        return $this->str;
    }
}

?>