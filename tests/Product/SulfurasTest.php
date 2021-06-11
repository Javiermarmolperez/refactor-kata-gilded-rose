<?php

namespace Tests\Product;

use GildedRose\Product\Sulfuras;
use PHPUnit\Framework\TestCase;

class SulfurasTest extends TestCase
{

    public function testShouldBeSulfurasImmutableItem(): void
    {
        $expectedValue = 1;
        $item = new Sulfuras($expectedValue, $expectedValue);
        $item->nextDay();

        $this->assertSame($expectedValue, $item->quality);
        $this->assertSame($expectedValue, $item->sell_in);
    }
}
