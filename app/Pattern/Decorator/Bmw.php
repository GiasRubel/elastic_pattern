<?php

namespace App\Pattern\Decorator;

class Bmw implements CarInterface
{
    public function cost()
    {
        return 300000;
    }

    public function description()
    {
        return 'this desc car is bmw';
    }
}
