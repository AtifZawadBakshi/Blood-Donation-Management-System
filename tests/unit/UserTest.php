<?php

use \PHPUnit\Framework\TestCase;
require 'users/User.php';
class UserTest extends TestCase{
        

        protected function UserCreate() {
            $rayoon = new User();
            $rayoon ->registration("testingmail@gmail.com","User Test","user_test");
            return $rayoon;
        }
        public function testRegistration() {
            $arman = new User();
            $output = $arman->registration("registrationtest@gmail.com","Registration Test","Registration_Test");
            $this->assertTrue($output);
        }
        public function testLogin() {
            $rayoon=$this->UserCreate();
            $this->assertTrue( $rayoon ->login("testingmail@gil.com","user_test"));
        }

        public function testStatus() {
            $rayoon=$this->UserCreate();
            $this->assertTrue($rayoon->getStatus());
        }

        public function testChangeStatus(){
            $rayoon=$this->UserCreate();
            $this->assertTrue($rayoon->getStatus());
           // $this->assertTrue($rayoon->changeStatus());
            $this->assertFalse($rayoon->getStatus());
        }


}