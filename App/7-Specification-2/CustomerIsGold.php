<?php

namespace App\SpecificationByDB;

class CustomerIsGold implements CustomerSpecification
{
    /**
     * @var Customer $customer
     *
     * @return bool
     */
    public function isSatisfiedBy(Customer $customer)
    {
        return $customer->type() == 'gold';
    }
    /**
     * @var Customer $customer
     *
     * @return bool
     */
    public function asScope($query)
    {
        return $query->where('type', 'gold');
    }
}