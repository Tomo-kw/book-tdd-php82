<?php

declare(strict_types=1);

namespace Money;

abstract class Money
{
    protected int $amount;

    abstract public function times(int $multiplier): self;

    abstract public function currency(): string;

    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount
            && get_class($this) === get_class($object);
    }

    public static function dollar(int $amount): self
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): self
    {
        return new Franc($amount);
    }
}