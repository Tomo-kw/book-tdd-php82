<?php

declare(strict_types=1);

namespace Money;

// PHPにはJavaのHashMapがないので、連想配列を使って代用する
class HashMap
{
    private array $values = [];

    public function put(Pair $pair, int $rate): void
    {
        // PHPではキーにオブジェクトを指定することができないので、Pairオブジェクトのハッシュコードをキーとして使う
        $this->values[$pair->hashCode()] = $rate;
    }

    public function get(Pair $pair)
    {
        return $this->values[$pair->hashCode()];
    }
}