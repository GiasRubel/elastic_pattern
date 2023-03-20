<?php

namespace App\Pattern\Facade;

class Reddiator
{
    function reddit($url, $title)
    {
        var_dump('Reddit! url:'.$url.' title:'.$title);
    }
}
