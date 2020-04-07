<?php

class CustomerRepository
{

    public function bySpecs($specs)
    {
        $matches = [];
        foreach ($this->customers as $customer) {
            if ($specs->isSatisfiedBy($customer)) {
                $matches[] = $customer;
            }
        }
        return $matches;

    }

    public function all()
    {
        return Customer::all();
    }

}
