<?php

namespace App\Specification;

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
}