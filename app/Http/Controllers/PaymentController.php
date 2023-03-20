<?php

namespace App\Http\Controllers;

use App\Billing\OrderDetails;
use App\Billing\BankPayment;
use App\Billing\PaymentProcessorInterface;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(OrderDetails $orderDetails, PaymentProcessorInterface $paymentGetaway)
    {
        $orderDetails->all(200);
        return $paymentGetaway->charge(2500);
    }
}
