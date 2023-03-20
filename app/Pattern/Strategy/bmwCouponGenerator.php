<?php

namespace App\Pattern\Strategy;

class bmwCouponGenerator implements carCouponGenerator
{
    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;

    function addSeasonDiscount()
    {
        if(!$this->isHighSeason) return $this->discount += 5;

        return $this->discount +=0;
    }

    function addStockDiscount()
    {
        if($this->bigStock) return $this->discount += 7;

        return $this->discount +=0;
    }
}
