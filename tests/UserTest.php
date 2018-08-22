<?php
use PHPUnit\Framework\TestCase;
require 'class/User.php';
class UserTest extends TestCase
{
    public function testAttribute() {
        $this->assertClassHasAttribute('id', User::class);
        $this->assertClassHasAttribute('email', User::class);
        $this->assertClassHasAttribute('createdAt', User::class);
    }
    public function testGetAll(){
        $testUser = new User("007","bond@james","90s");
        $this->assertStringStartsWith('id:', $testUser->getAll());
    }

}

?>