<?php

declare(strict_types=1);

namespace Money;

class Dollar
{
    public function __construct(
        private readonly int $amount
    )
    {
    }

    public function times(int $multiplier): self
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(self $object): bool
    {
        return $this->amount === $object->amount;
    }
}