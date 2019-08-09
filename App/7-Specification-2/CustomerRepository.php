<?php

namespace App\SpecificationByDB;

class CustomerRepository
{
    /**
     * @param CustomerSpecification $specification
     *
     * @return array
     */
    public function whoMatch(CustomerSpecification $specification)
    {
        $customers = $specification->asScope(Customer::query())->get();

        return $customers;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return Customer::all();
    }
}