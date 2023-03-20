<?php

namespace App\Http\Controllers\pattern;

use App\Http\Controllers\Controller;
use App\Pattern\Factory\CarOrder;
use Illuminate\Http\Request;

class FactoryController extends Controller
{
    public function index(CarOrder $carOrder)
    {
       // dump($carOrder->getCarOrder());
      $r =  $carOrder->order('r');
      $l =  $carOrder->order('l');
        dd($carOrder->getCarOrder());

      // dump($carOrder->getCarOrder());
    }
}
