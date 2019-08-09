<?php

namespace App\SpecificationByDB;

interface CustomerSpecification
{
    /**
     * @var Customer $customer
     *
     * @return bool
     */
    public function isSatisfiedBy(Customer $customer);

    /**
     * @var Customer $customer
     *
     * @return mixed
     */
    public function asScope($query);
}