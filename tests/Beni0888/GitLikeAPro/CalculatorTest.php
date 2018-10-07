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

    public function testMinus()
    {
        $result = $this->calculator->minus(1, 1);
        $expectedResult = 0;

        $this->assertEquals($expectedResult, $result);
    }


    public function testMultiply()
    {
        $result = $this->calculator->multiply(2, 5);
        $expectedResult = 10;

        $this->assertEquals($expectedResult, $result);
    }

    public function testDivide()
    {
        $result = $this->calculator->divide(10, 2);
        $expectedResult = 5;

        $this->assertEquals($expectedResult, $result);
    }


}
