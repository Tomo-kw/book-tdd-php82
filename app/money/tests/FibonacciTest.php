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
        // [入力値, 期待される結果] のペア
        $cases = [
            [0, 0],[1,1]
        ];

        for ($i = 0; $i < count($cases); $i++) {
            $this->assertEquals($cases[$i][1], $this->fib($cases[$i][0]));
        }
    }
}