<?php

namespace App\Billing;

class OrderDetails{
    private $paymentGetaway;

    public function __construct(PaymentProcessorInterface $paymentGetaway)
    {
        $this->paymentGetaway = $paymentGetaway;
    }

    public function all($amount)
    {
        $this->paymentGetaway->setDiscount($amount);

        return ['txt' => 'order details'];
    }
}
