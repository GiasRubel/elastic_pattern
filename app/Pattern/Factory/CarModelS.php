<?php

namespace App\Pattern\Factory;

class CarModelS implements CarInterface
{
    public  $model = 's';

    public function getModel()
    {
        return $this->model;
    }
}
