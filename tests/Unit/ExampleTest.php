<?php

namespace JobayerMojumder\Calculator\Tests\Unit;

use PHPUnit\Framework\TestCase;
use JobayerMojumder\Calculator\Calculator;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_add()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
    }

    public function test_subtract()
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->subtract(5, 3));
    }

    public function test_multiply()
    {
        $calculator = new Calculator();
        $this->assertEquals(6, $calculator->multiply(2, 3));
    }

    public function test_division()
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->division(6, 3));
    }
}
