<?php

use Illuminate\Database\Capsule\Manager as DB;

class CustomerRepositoryTest extends \PHPUnit\Framework\TestCase
{

    private $Customer;

    public function setUp(): void
    {
		$this->setUpDatabase();
		
		$this->MigrateTables();

        $this->Customer = new CustomerRepository();
    }

    public function setUpDatabase()
    {
		$database = new DB();
		
        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:',
		]);
		$database->bootEloquent();
		$database->setAsGlobal();
    }

    public function MigrateTables()
    {
        DB::schema()->create('customers', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->timestamps();
		});
		
        Customer::create([
            'name' => "Joe",
            'type' => 'Gold',
        ]);

        Customer::create([
            'name' => "Jane",
            'type' => 'Silter',
        ]);

    }

    /** @test */
    public function ItFetchesAllCustomers()
    {
        $this->assertCount(2, $this->Customer->all());
    }

    /** @test */
    public function customerMatchSpecs()
    {
        $results = $this->Customer->bySpecs(new CustomerIsGold());
        $this->assertCount(1, $results);
    }

}
