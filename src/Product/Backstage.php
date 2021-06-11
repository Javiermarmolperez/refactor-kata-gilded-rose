<?php


namespace GildedRose\Product;


use GildedRose\Product\Properties\IncrementQuality;
use GildedRose\Product\Properties\Quality;

class Backstage extends GenericProduct
{
    public function __construct(Sell_In $sell_in, int $quality)
    {
        parent::__construct("Backstage", $sell_in, new IncrementQuality($quality));
    }

    public function nextDay()
    {
        $this->updatedQuality();
        if ($this->sell_In_Class->toInt() < 11) {
            $this->updatedQuality();
        }
        if ($this->sell_In_Class->toInt() < 6) {
            $this->updatedQuality();
        }

        $this->updatedSell_In();

        if ($this->sell_In_Class->isExpired()) {
            $this->qualityClass = new Quality(0);
            $this->quality = 0;
        }
    }
}