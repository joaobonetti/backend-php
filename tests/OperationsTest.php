<?php

namespace Moovin\Job\Backend;

use \PHPUnit_Framework_TestCase as TestCase;

class OperationsTest extends TestCase
{
    // public function testDepositValue()
    // {
    //     $operations = new Operations();
 
    //     $this->assertSame(800.50, $operations->deposit(500.00, 300.50));
    // }

    // public function testWithdrawTrue()
    // {
    //     $operations = new Operations();
 
    //     $this->assertSame(497.50, $operations->withdraw(1000, 500, 'CC'));
    // }

    public function testWithdrawWithoutBalance()
    {
        $operations = new Operations();
 
        $this->assertSame(100, $operations->withdraw(100, 500, 'CC'));
    }
    



}