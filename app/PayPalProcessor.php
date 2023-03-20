<?php

namespace App;

class PayPalProcessor implements PaymentProcessorInterface{
    public function pay()
    {
        return 'pay by Paypal method';
    }
}
