<?php

namespace App\Billing;

class BankPayment implements PaymentProcessorInterface
{

    private $charge;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        return [
            'amount' => $amount - $this->discount,
            'currency' => $this->currency,
            'discount' => $this->discount,
        ];
    }

}
