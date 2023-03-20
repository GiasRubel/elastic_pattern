<?php

namespace App\Pattern\Strategy;

interface carCouponGenerator
{
    function addSeasonDiscount();
    function addStockDiscount();
}
