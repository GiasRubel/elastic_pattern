<?php

namespace App\Pattern\Strategy;

class couponObjectGenerator
{
    function couponObjectGenerator($car)
    {
        if($car == "bmw")
        {
            $carObj = new bmwCouponGenerator;
        }
        else if($car == "mercedes")
        {
            $carObj = new mercedesCouponGenerator;
        }

        return $carObj;
    }
}
