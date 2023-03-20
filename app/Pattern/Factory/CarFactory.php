<?php

namespace App\Pattern\Factory;

class CarFactory
{

    public function make($model = null)
    {
        if (strtolower($model) == 'r')
            return  new CarModelR();
        else
            return  new CarModelS();
    }
}
