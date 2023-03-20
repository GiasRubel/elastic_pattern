<?php

namespace App\Pattern\Adapter;

class Customer
{
    protected $pay;

    public function __construct($pay)
    {
        $this->pay = $pay;
    }

    public function pay($name, $price)
    {
        $this->pay->addItem($name);
        $this->pay->addPrice($price);
    }
}
