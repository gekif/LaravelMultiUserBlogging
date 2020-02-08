<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;


class Premium extends Person implements Customer
{
    // Lets add more methods
    public function getMonthlyFee()
    {
        return 10.0;
    }


    public function getAmountToBorrow()
    {
        return 10;
    }


    public function getType()
    {
        return 'Premium';
    }


    public function pay(float $amount)
    {
        return "Paying $amount for " . $this->getType();
    }

    public function isExtentOfTaxes()
    {
        return "No Tax At All";
    }


}