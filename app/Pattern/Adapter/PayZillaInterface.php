<?php

namespace App\Pattern\Adapter;

interface PayZillaInterface
{
    function addItem($itemName);

    function addPrice($itemPrice);
}
