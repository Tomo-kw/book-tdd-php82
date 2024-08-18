<?php

declare(strict_types=1);

namespace Tests\Money;

use PHPUnit\Framework\TestCase;

final class FibonacciTest extends TestCase
{
    public function fib(int $n): int
    {
        return 0;
    }
    public function testFibonacci()
    {
        $this->assertEquals(0, $this->fib(0));
    }
}