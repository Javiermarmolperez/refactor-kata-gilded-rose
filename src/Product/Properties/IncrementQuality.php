<?php


namespace GildedRose\Product\Properties;


class IncrementQuality extends Quality
{
    private int $LIMIT_QUALITY = 50;

    protected function _updateQuality(): Quality
    {
        return $this->toInt() < $this->LIMIT_QUALITY
            ? new self($this->toInt() + 1)
            : new self($this->toInt());
    }

}