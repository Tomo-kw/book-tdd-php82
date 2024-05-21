<?php

declare(strict_types=1);

namespace Money;

class Money
{
    protected int $amount;

    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount;
    }
}