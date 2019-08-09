<?php

use App\Specification\Customer;
use PHPUnit\Framework\TestCase;
use App\Specification\CustomerIsGold;

class CustomerIsGoldTest extends TestCase
{
    /** @test */
    public function a_customer_is_gold_if_they_have_respective_type()
    {
        $specification = new CustomerIsGold;
        $goldCustomer = new Customer('gold');
        $silverCustomer = new Customer('silver');

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy($silverCustomer));
    }
}