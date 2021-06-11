<?php


namespace GildedRose\Product;


use GildedRose\Product\Properties\Quality;
use GildedRose\Product\Properties\Sell_In;

class AgedBrie extends GenericProduct
{

    public function __construct(Sell_In $sell_in, Quality $quality)
    {
        parent::__construct("Queso Brie envejecido", $sell_in, $quality);
    }
}