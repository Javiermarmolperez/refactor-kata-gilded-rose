<?php

namespace GildedRose\Product;

use GildedRose\Product;
use GildedRose\Product\Properties\Quality;
use GildedRose\Product\Properties\Sell_In;

class GenericProduct extends Product
{
    protected Sell_In $sell_In_Class;
    protected Quality $qualityClass;

    public function __construct(string $name, Sell_In $sell_in, Quality $quality)
    {
        parent::__construct($name, $sell_in->toInt(), $quality->toInt());
        $this->sell_In_Class = $sell_in;
        $this->qualityClass = $quality;
    }


    public function nextDay()
    {
        $this->updatedSell_In();
        $this->updatedQuality();
    }

    protected function updatedQuality(): void
    {
        $this->qualityClass = $this->qualityClass->updatedQuality($this->sell_In_Class);
        $this->quality = $this->qualityClass->toInt();
    }

    protected function updatedSell_In(): void
    {
        $this->sell_In_Class = $this->sell_In_Class->updated();
        $this->sell_in = $this->sell_In_Class->toInt();
    }
}