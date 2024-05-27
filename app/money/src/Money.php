<?php

declare(strict_types=1);

namespace Money;

class Money
{
    protected int $amount;

    protected string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): self
    {
        return new self($this->amount * $multiplier, $this->currency());
    }

    public function equals(self $object): bool
    {
        return $this->amount === $object->amount
            && $this->currency() === $object->currency();
    }

    public static function dollar(int $amount): self
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): self
    {
        return new Money($amount, 'CHF');
    }

    public function currency(): string
    {
        return $this->currency;
    }
}