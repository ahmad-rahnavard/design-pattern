<?php

use PHPUnit\Framework\TestCase;
use App\SpecificationByDB\Customer;
use App\SpecificationByDB\CustomerIsGold;
use Illuminate\Database\Schema\Blueprint;
use App\SpecificationByDB\CustomerRepository;
use Illuminate\Database\Capsule\Manager as DB;

class CustomerRepositoryDBTest extends TestCase
{
    /**
     * @var CustomerRepository
     */
    protected $customers;

    public function setUp(): void
    {
        $this->setUpDatabase();
        $this->migrateTables();

        $this->customers = new CustomerRepository;
    }

    /**
     * Setting the database to load on memory.
     */
    public function setUpDatabase()
    {
        $database = new DB;
        $database->addConnection([
            'driver'   => 'sqlite',
            'database' => ':memory:'
        ]);
        $database->bootEloquent();
        $database->setAsGlobal();
    }

    /**
     * Migrate tables to have fake data.
     */
    public function migrateTables()
    {
        DB::schema()->create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
        });

        Customer::create(['name' => 'Joe', 'type' => 'gold']);
        Customer::create(['name' => 'Jane', 'type' => 'silver']);
    }

    /** @test */
    public function fetch_all_customers()
    {
        $results = $this->customers->all();

        $this->assertCount(2, $results);
    }

    /** @test */
    public function fetch_all_the_customers_who_match_a_given_specification()
    {
        $results = $this->customers->whoMatch(new CustomerIsGold);

        $this->assertCount(1, $results);
    }
}