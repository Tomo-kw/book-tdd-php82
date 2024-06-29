<?php

declare(strict_types=1);

namespace Money;

class Money implements Expression
{
    public readonly int $amount;

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

    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function plus(Money $addend): Sum
    {
        return new Sum($this, $addend);
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
}