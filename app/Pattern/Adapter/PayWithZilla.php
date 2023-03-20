<?php

namespace App\Pattern\Adapter;

class PayWithZilla implements PayZillaInterface
{
    function addItem($itemName)
    {
        var_dump("1 item added: " . $itemName );
    }

    function addPrice($itemPrice)
    {
        var_dump("1 item added to total with the price of: " . $itemPrice );
    }
}
