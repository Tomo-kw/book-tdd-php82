<?php

declare(strict_types=1);

namespace Tests\Money;

use Money\Dollar;
use PHPUnit\Framework\TestCase;

final class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}