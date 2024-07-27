<?php

declare(strict_types=1);

namespace Money;

// 通貨操作を抽象化するためのインターフェース
interface Expression
{
    public function plus(Expression $addend): Expression;
    
    public function reduce(Bank $bank, string $to): Money;
}