<?php

namespace App\Pattern\Facade;

class CodeTwit
{
    function tweet($status, $url)
    {
        var_dump('Tweeted:'.$status.' from:'.$url);
    }
}
