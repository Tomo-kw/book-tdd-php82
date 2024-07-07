<?php

declare(strict_types=1);

namespace Money;

// 通貨の変換レートを管理するクラス
class Pair
{
    private string $from;
    private string $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(Object $object): bool
    {
        $cast = fn($object): Pair => $object;
        $pair = $cast($object);
        return $this->from === $pair->from && $this->to === $pair->to;
    }

    public function hashCode(): int
    {
        return 0;
    }

}