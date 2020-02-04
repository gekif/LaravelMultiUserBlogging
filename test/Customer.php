<?php

class Customer
{
    private $id;
    private $firstName;
    private $surnName;
    private $email;


    public function __construct(
        $id, $firstName, $surnName, $email
    )
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->surnName = $surnName;
        $this->email = $email;
    }

}