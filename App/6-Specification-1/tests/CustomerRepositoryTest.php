<?php

use App\Specification\Customer;
use PHPUnit\Framework\TestCase;
use App\Specification\CustomerIsGold;
use App\Specification\CustomerRepository;

class CustomerRepositoryTest extends TestCase
{
    /**
     * @var CustomerRepository
     */
    protected $customers;

    public function setUp (): void
    {
        $this->customers = new CustomerRepository([
            new Customer('gold'),
            new Customer('bronze'),
            new Customer('silver'),
            new Customer('gold'),
        ]);
    }
    /** @test */
    public function fetch_all_customers()
    {
        $results = $this->customers->all();

        $this->assertCount(4, $results);
    }
    /** @test */
    public function fetch_all_the_customers_who_match_a_given_specification()
    {
        $customers = new CustomerRepository([
            new Customer('gold'),
            new Customer('bronze'),
            new Customer('silver'),
            new Customer('gold'),
        ]);

        $results = $customers->matchingSpecification(new CustomerIsGold);

        $this->assertCount(2, $results);
    }
}