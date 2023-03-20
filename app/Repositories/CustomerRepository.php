<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function format($cus)
    {
        return [
            'customer' => $cus->name,
            'userEmail' => $cus->user->email,
            'addedOn' => $cus->created_at->diffForHumans(),
        ];
    }

    public function all()
    {
        $cus = Customer::OrderBy('name', 'desc')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map(function ($cus) {
                return $this->format($cus);
            });

        return $cus;
    }

    public function findById($id)
    {
        $cus = Customer::where('id', $id)->get()
            ->map(function ($cus) {
                return $this->format($cus);
            });
        return $cus;
    }
}
