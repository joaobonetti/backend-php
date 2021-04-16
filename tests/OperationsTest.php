<?php

namespace Moovin\Job\Backend;

use \PHPUnit_Framework_TestCase as TestCase;

class OperationsTest extends TestCase
{
    public function testDepositValue()
    {
        $operations = new Operations();
 
        $this->assertEquals(800.50, $operations->deposit(500.00, 300.50));
    }

}