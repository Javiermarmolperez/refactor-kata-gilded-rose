<?php


namespace GildedRose\Product;


use GildedRose\Product\Properties\ImmutableQuality;
use GildedRose\Product\Properties\Sell_InImmutable;

class Sulfuras extends GenericProduct
{

    public function __construct(int $sell_in, int $quality)
    {
        parent::__construct("Sulfuras", new Sell_InImmutable($sell_in), new ImmutableQuality($quality));
    }
}