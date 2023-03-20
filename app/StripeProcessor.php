<?php

namespace App;

class StripeProcessor implements PaymentProcessorInterface{
    public function pay()
    {
        return 'pay by stripe';
    }
}
