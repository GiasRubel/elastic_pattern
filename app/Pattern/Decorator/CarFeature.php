<?php

namespace App\Pattern\Decorator;

abstract class CarFeature implements  CarInterface
{
    protected $car;
    public function __construct($car)
    {
        $this->car = $car;
       // dd($this->car->cost());
    }

    public abstract function cost();
    public abstract function description();

}
