<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;


class Basic extends Person implements Customer
{
    // Lets add more methods
    public function getMonthlyFee()
    {
        return 5.0;
    }


    public function getAmountToBorrow()
    {
        return 3;
    }


    public function getType()
    {
        return 'Basic';
    }


    public function pay(float $amount)
    {
        return "Paying $amount for " . $this->getType() ;
    }

    public function isExtentOfTaxes()
    {
        return "I Think you got to pay your taxes";
    }


}