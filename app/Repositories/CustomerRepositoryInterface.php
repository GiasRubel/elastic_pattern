<?php

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    public function format($cus);

    public function all();

    public function findById($id);
}
