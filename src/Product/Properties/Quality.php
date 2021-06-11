<?php


namespace GildedRose\Product\Properties;


class Quality
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function updatedQuality(Sell_In $sell_In): Quality {
        $quality = $this->_updateQuality();
        return $sell_In->isExpired()
            ? $quality->_updateQuality()
            : $quality;
    }

    public function toInt()
    {
        return $this->value;
    }

    protected function _updateQuality(): Quality
    {
        return $this->toInt() > 0
            ? new self($this->toInt() - 1)
            : new self($this->toInt());
    }
}