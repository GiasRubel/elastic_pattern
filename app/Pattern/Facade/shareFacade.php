<?php

namespace App\Pattern\Facade;

class shareFacade
{
    protected $tweet;
    protected $google;
    protected $radiator;

    public function __construct($tweet, $google, $radiator)
    {
        $this->tweet = $tweet;
        $this->google = $google;
        $this->radiator = $radiator;
    }

    public function share($url, $title, $status)
    {
        $this->tweet->tweet($status, $url);
        $this->google->share($url);
        $this->radiator->reddit($url, $title);
    }
}
