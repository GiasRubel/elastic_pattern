<?php

namespace App\Polymorphism;

class Editor extends Book
{
    public function calcAmount($amount)
    {
        $setTk = $this->setTk($amount);

        return $res = $this->getTk() + 50;
    }
}
