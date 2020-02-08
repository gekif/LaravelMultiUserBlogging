<?php
/**
 * Created by PhpStorm.
 * User: LaptopFikar
 * Date: 08/02/2020
 * Time: 9:39
 */

namespace Bookstore\Domain;


use Bookstore\Utils\Communicator;
use Bookstore\Utils\Contract;


class Manager
{
    use Contract, Communicator{
        Contract::sign insteadof Communicator;
        Communicator::sign as makeSign;
    }


    public function sign()
    {
        echo "It's from class itself";
    }


}