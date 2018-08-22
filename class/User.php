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
    public function getId(){
        return $this->id;
    }

    public function setEmail(){
        return $this->email = $e;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setCreatedAt(){
        return $this->createdAt = $c;
    }
    public function getCreatedAt(){
        return $this->createdAt;
    }
    
    public function getAll(){
        $prop = "id: ".$this->id."; email: ".$this->email."; created at: ".$this->createdAt;
        return $this->prop = $prop;
    }
}

?>