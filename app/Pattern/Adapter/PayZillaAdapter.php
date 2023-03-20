<?php

namespace App\Pattern\Adapter;

class PayZillaAdapter implements PayZillaInterface
{
    protected  $pay;

    public function __construct(PayWithPayKal $payWithPayKal)
    {
        $this->pay = $payWithPayKal;
    }
    public function addItem($name)
    {
        return $this->pay->addItemKal($name);
    }

    public function addPrice($price)
    {
        return $this->pay->addPriceKal($price);
    }
}
