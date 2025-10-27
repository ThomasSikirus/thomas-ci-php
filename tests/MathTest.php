<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    public function testAdd()
    {
        $m = new Math();
        $this->assertSame(5.0, $m->add(2, 3));
    }

    public function testSub()
    {
        $m = new Math();
        $this->assertSame(1.0, $m->sub(4, 3));
    }

    public function testMul()
    {
        $m = new Math();
        $this->assertSame(12.0, $m->mul(3, 4));
    }

    public function testDiv()
    {
        $m = new Math();
        $this->assertSame(2.0, $m->div(10, 5));
    }

    public function testDivByZero()
    {
        $this->expectException(\InvalidArgumentException::class);

        $m = new Math();
        $m->div(10, 0);
    }
}
