<?php

namespace App\Polymorphism;

abstract class Book
{
    private $amount = 0;

    public function setTk($tk)
    {
        $this->amount = $tk;
    }

    public function getTk()
    {
        return $this->amount;
    }

    public abstract function calcAmount($amount);
}
