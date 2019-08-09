<?php

use PHPUnit\Framework\TestCase;
use App\SpecificationByDB\Customer;
use App\SpecificationByDB\CustomerIsGold;

class CustomerIsGoldDBTest extends TestCase
{
    /** @test */
    public function a_customer_is_gold_if_they_have_respective_type()
    {
        $specification = new CustomerIsGold;
        $goldCustomer = new Customer(['type' => 'gold']);
        $silverCustomer = new Customer(['type' => 'silver']);

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy($silverCustomer));
    }
}