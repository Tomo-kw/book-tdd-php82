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

        if ($n === 1) {
            return 1;
        }

        return $this->fib($n - 1) + $this->fib($n - 2);
    }
    public function testFibonacci()
    {
        // [入力値, 期待される結果] のペア
        $cases = [
            [0, 0],[1, 1],[2, 1],[3, 2],[4, 3],[5, 5],[6, 8],[7, 13],[8, 21],[9, 34]
        ];

        for ($i = 0; $i < count($cases); $i++) {
            $this->assertEquals($cases[$i][1], $this->fib($cases[$i][0]));
        }
    }
}