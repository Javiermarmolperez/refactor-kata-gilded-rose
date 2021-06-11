<?php

namespace Tests\Product;

use GildedRose\Product\GenericProduct;
use GildedRose\Product\Properties\Quality;
use GildedRose\Product\Properties\Sell_In;
use PHPUnit\Framework\TestCase;

class GenericProductTest extends TestCase
{

    public function testShouldBeUpdateGenericItem(): void
    {
        $item = new GenericProduct('generic item', new Sell_In(1), new Quality(1));

        $item->nextDay();

        $this->assertSame(0, $item->sell_in);
        $this->assertSame(0, $item->quality);
    }

    public function testNeverQualityIsNegative(): void {
        $item = new GenericProduct('generic item', new Sell_In(1), new Quality(0));

        $item->nextDay();

        $this->assertSame(0, $item->quality);
    }

    public function testGivenGenericItemWhenIsExpiredThenQualityIsDecreedDouble(): void {
        $item = new GenericProduct('generic item', new Sell_In(0), new Quality(2));

        $item->nextDay();

        $this->assertSame(0, $item->quality);
    }
}
