<?php
use PHPUnit\Framework\TestCase;
require 'class/User.php';
class UserTest extends TestCase
{
    public function testAttribute() {
        $this->assertClassHasAttribute('id', User::class);
        $this->assertClassHasAttribute('email', User::class);
        $this->assertClassHasAttribute('createAt', User::class);
    }
    public function testGetAll(){
        $this->assertContains($this->id);
    }

}

?>