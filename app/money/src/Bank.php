<?php

declare(strict_types=1);

namespace Money;

// 通貨の変換や計算（為替レート）を管理するクラス
class Bank
{
    private HashMap $rates;

    public function __construct()
    {
        $this->rates = new HashMap();
    }

    // 減らす
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $this->rates->put(new Pair($from, $to), $rate);
    }

    public function rate(string $from, string $to): int
    {
        if ($from === $to) {
            return 1;
        }
        return $this->rates->get(new Pair($from, $to));
    }
}