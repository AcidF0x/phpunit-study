<?php

use PHPUnit\Framework\TestCase;
use App\Calc;

/**
 * Class CalcTest
 */
class CalcTest extends TestCase
{
    protected $calc;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calc = new Calc();
    }

    public function testPlus()
    {
        $result = $this->calc->plus(10, 20);
        $this->assertEquals(30, $result);
    }

    public function testMinus()
    {
        $result = $this->calc->minus(10, 20);
        $this->assertEquals(-10, $result);
    }

    public function testMultiply()
    {
        $result = $this->calc->multiply(10, 20);
        $this->assertEquals(200, $result);
    }

    public function testDivision()
    {
        $result = $this->calc->division(10, 5);
        $this->assertEquals(2, $result);
    }
}
