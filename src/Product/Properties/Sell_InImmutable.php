<?php

namespace GildedRose\Product\Properties;

class Sell_InImmutable extends Sell_In {

    public function updated(): Sell_In {
        return new self($this->toInt());
    }

}