<?php

namespace App\Pattern\Strategy;

class couponGenerator
{
    private $coupon;

    public function __construct($coupon)
    {
        $this->coupon = $coupon;
    }

    public function getCoupon()
    {
       $discount = $this->coupon->addSeasonDiscount();
       $discount = $this->coupon->addStockDiscount();

        return $coupon = "Get {$discount}% off the price of your new car.";
    }
}
