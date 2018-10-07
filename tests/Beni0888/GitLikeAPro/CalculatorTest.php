<?php

namespace Beni0888\GitLikeAPro;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testSum() {

        $result = $this->calculator->sum(1, 1);
        $expectedResult = 2;

        $this->assertEquals($expectedResult, $result);
    }
}
