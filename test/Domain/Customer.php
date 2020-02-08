<?php

namespace Bookstore\Domain;

interface Customer
{
    //  Method
     public function getMonthlyFee();
     public function getAmountToBorrow();
     public function getType();
}