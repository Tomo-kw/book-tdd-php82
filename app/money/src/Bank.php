<?php

declare(strict_types=1);

namespace Money;

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        $cast = fn($source): Sum => $source;
        $sum = $cast($source);

        return $sum->reduce($to);
    }
}