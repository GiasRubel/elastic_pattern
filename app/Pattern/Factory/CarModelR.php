<?php

namespace App\Pattern\Factory;

class CarModelR implements CarInterface
{
    public  $model = 'r';

    public function getModel()
    {
        return $this->model;

    }
}
