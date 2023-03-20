<?php

namespace App\Pattern\Decorator;

class SunRoof extends  CarFeature
{

    public function cost()
    {
        return $this->car->cost() + 800;
    }

    public function description()
    {
        return $this->car->description() . ' AND sunroof class';
    }
}
