<?php

class CustomerIsGoldTest extends \PHPUnit\Framework\TestCase
{

    /** @test */
    public function a_customer_is_gold()
    {
        $specification = new CustomerIsGold();
        $goldCustomer = new Customer(["type" => "Gold"]);
        $silverCustomer = new Customer(["type" => "Silver"]);
        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
    }

}
