<?php

namespace Tests\Product;

use GildedRose\Product\AgedBrie;
use GildedRose\Product\Properties\IncrementQuality;
use GildedRose\Product\Properties\Quality;
use GildedRose\Product\Properties\Sell_In;
use PHPUnit\Framework\TestCase;

class AgedBrieTest extends TestCase
{

    function testWhenNextDayThenQualityIncrement(): void {
        $item = new AgedBrie(new Sell_In(1), new IncrementQuality(0));
        $item->nextDay();

        $this->assertSame(1, $item->quality);
    }

    function testLimitQuality(): void {
        $item = new AgedBrie(new Sell_In(1), new IncrementQuality(50));
        $item->nextDay();

        $this->assertSame(50, $item->quality);
    }

    function testGivenNextDayWhenIsExpiredThenQualityIncrementDouble(): void {
        $item = new AgedBrie(new Sell_In(0), new IncrementQuality(0));
        $item->nextDay();

        $this->assertSame(2, $item->quality);
    }
}
