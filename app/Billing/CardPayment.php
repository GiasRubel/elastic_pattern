<?php

namespace App\Billing;

class CardPayment implements PaymentProcessorInterface
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
        $fee = $amount * 0.03;
        return [
            'amount' => $amount - $this->discount,
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fee' => $fee,
        ];
    }

}
