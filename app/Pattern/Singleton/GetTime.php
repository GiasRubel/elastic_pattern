<?php

namespace App\Pattern\Singleton;

use Carbon\Carbon;

class GetTime
{
    private static $instance = null;
    private $time;
    public function __construct()
    {
        $this->time = Carbon::now();
    }

    public function getInstance()
    {
        if (!self::$instance){
            self::$instance = new GetTime();
        }
        return self::$instance;
    }

    public function getTime()
    {
        return $this->time;
    }
}
