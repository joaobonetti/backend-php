<?php

namespace Moovin\Job\Backend;

require_once('config/Config.php');


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

    // public function testWithdrawWithoutBalance()
    // {
    //     $operations = new Operations();
 
    //     $this->assertSame(100, $operations->withdraw(100, 500, 'CC'));
    // }

    // public function testWithdrawOnLimit()
    // {
    //     $operations = new Operations();
 
    //     $this->assertSame(100, $operations->withdraw(100, 601, 'CC'));
    // }

    public function testTransferTrue()
    {
        $operations = new Operations();

        $arrayExpected = [
            0 => 5534.0,
            1 => 24565.27
        ];
 
        $this->assertSame($arrayExpected, $operations->transfer(123456, 5584.58, 987654, 50.58));
    }



}