<?php

namespace Moovin\Job\Backend;

use \PHPUnit_Framework_TestCase as TestCase;

class OperationsTest extends TestCase
{
    public function testDepositValue()
    {
        $operations = new Operations();
 
        $this->assertSame(800.50, $operations->deposit(500.00, 300.50));
    }

    public function testWithdrawTrue()
    {
        $operations = new Operations();
 
        $this->assertSame(500.00, $operations->withdraw(1000.00, 500.00, 'CC'));
    }



}