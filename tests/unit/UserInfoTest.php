<?php

use \PHPUnit\Framework\TestCase;
require 'Userinfo.php';
class UserInfoTest extends TestCase
{
    
    public function test_Info(){
        $user = new Userinfo();
        $name = $user->getDonorProfile(30)['fname'];
        $this->assertEquals('Varun23',$name);
    }

    public function testsearchDonorByCity(){
        $user = new Userinfo();
        $city = 'Pokhara';
        $result = $user->searchDonorByCity($city)['city'];
        $this->assertEquals($city,$result);
    }

    public function testAddDonor(){
        $user = new Userinfo();

        $user->addDonor('bakshi','The','Bhai','male','O+','1998-04-18','Mohammadpur','Dhaka','2015-04-18','Good','30',
            '100','200','50','9','Negative','Positive','Negative','Negative','0229834231','0123123213');
            $city='Dhaka';
            $result = $user->searchDonorByCity($city)['fname'];
            $this->assertEquals('bakshi',$result);
    }


}