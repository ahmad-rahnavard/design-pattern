<?php

namespace App\Specification;

class CustomerRepository
{
    protected $customers;

    /**
     * CustomerRepository constructor.
     *
     * @param $customers
     */
    public function __construct($customers)
    {
        $this->customers = $customers;
    }

    /**
     * @param CustomerSpecification $specification
     *
     * @return array
     */
    public function matchingSpecification(CustomerSpecification $specification)
    {
        return array_filter($this->customers, function ($customer) use ($specification) {
            if ($specification->isSatisfiedBy($customer)) {
                return $customer;
            }
        });
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->customers;
    }
}