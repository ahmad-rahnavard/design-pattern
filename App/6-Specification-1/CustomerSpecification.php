<?php

namespace App\Specification;

interface CustomerSpecification
{
    /**
     * @var Customer $customer
     *
     * @return bool
     */
    public function isSatisfiedBy(Customer $customer);
}