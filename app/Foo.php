<?php

namespace App;

class Foo
{
    public function __construct($appName)
    {
        $this->appName = $appName;
    }
    public function hello()
    {
        return "app name {$this->appName}";
    }
}
