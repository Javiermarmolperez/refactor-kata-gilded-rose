<?php

namespace GildedRose\Product\Properties;

class Sell_In {
    private int $value;

    /**
     * Sell_In constructor.
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function updated(): Sell_In {
        return new Sell_In($this->value - 1);
    }

    public function isExpired(): bool {
        return $this->value < 0;
    }

    public function toInt(): int
    {
        return $this->value;
    }
}