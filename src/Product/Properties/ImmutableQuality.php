<?php


namespace GildedRose\Product\Properties;


class ImmutableQuality extends Quality
{

    protected function _updateQuality(): Quality
    {
        return new self($this->toInt());
    }

}