<?php

namespace App\Billing;

interface PaymentProcessorInterface
{
    public function setDiscount($amount);

    public function charge($amount);
}
