<?php

declare(strict_types=1);

namespace Money;

abstract class Money
{
    protected int $amount;

    protected string $currency;

    abstract public function times(int $multiplier): self;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Money $object): bool
    {
        return $this->amount === $object->amount
            && get_class($this) === get_class($object);
    }

    public static function dollar(int $amount): self
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): self
    {
        return new Franc($amount, 'CHF');
    }

    public function currency(): string
    {
        return $this->currency;
    }
}