<?php

use \PHPUnit\Framework\TestCase;
require_once 'admin\php\adDBConnect.php';

class adminTest extends TestCase{

    public function testEmployeeinfo(){
        $db = new adDBconnect();
        $employee = $db->getEmployeeById(18)[0];
        $this->assertEquals('zalish34',$employee['username']);
    }

    public function testEmployees(){
        $db = new adDBconnect();
        $employees = $db->getEmployees();
        $count=count($employees);
        $this->assertEquals(4,$count);
    }

    public function testAddEmployee(){
        $db = new adDBconnect();
        $result = $db->addEmployee('shakil','12345678','shakil','raihan','0123131232','1998-04-18');
        $employees = $db->getEmployees();
        $count=count($employees);
        $this->assertEquals(4,$count);
    }

    public function testEmplyeeUpdate(){
        $db = new adDBconnect();
        $result = $db->updateEmployee(18,'zalish23','12345678','Zalish','Mahmud','01123313','2021-04-30');
        $employee = $db->getEmployeeById(18)[0];
        $this->assertEquals('zalish23',$employee['username']);

    }


}