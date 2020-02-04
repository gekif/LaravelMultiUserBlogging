<?php

class Customer
{
    private $id;
    private $firstName;
    private $surnName;
    private $lastName;
    private $email;


    public function __construct(
        $id, $firstName, $surnName, $lastName,$email
    )
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->surnName = $surnName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

}