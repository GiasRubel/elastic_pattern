<?php

namespace App\Pattern\Factory;

class CarOrder
{
    protected $carOrders = [];
    protected $car;

    public function __construct(CarFactory $carFactory)
    {
        $this->car = $carFactory;
    }

    public function order($model = null)
    {
        $car = $this->car->make($model);
        $this->carOrders[] = $car->getModel();
    }

    public function getCarOrder()
    {
        return $this->carOrders;
    }
}
