<?php

declare(strict_types=1);

namespace Tests\Money;

use PHPUnit\Framework\TestCase;

final class FibonacciTest extends TestCase
{
    public function fib(int $n): int
    {
        if($n === 0) {
            return 0;
        }

        return 1;
    }
    public function testFibonacci()
    {
        $this->assertEquals(0, $this->fib(0));
        $this->assertEquals(1, $this->fib(1));
    }
}