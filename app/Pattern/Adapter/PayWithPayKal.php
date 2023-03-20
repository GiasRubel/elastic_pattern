<?php

namespace App\Pattern\Adapter;

class PayWithPayKal
{
    function addItemKal($itemName)
    {
        var_dump("Paykal item added: " . $itemName );
    }

    function addPriceKal($itemPrice)
    {
        var_dump("Paykal item added to total with the price of: " . $itemPrice );
    }
}
