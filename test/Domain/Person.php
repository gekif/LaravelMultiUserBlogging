<?php

namespace Bookstore\Domain;


class Person
{
    protected $firstName;
    protected $surnName;
    protected $lastName;


    public function __construct($firstName, $surnName, $lastName)
    {
        $this->firstName = $firstName;
        $this->surnName = $surnName;
        $this->lastName = $lastName;
    }


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getSurnName()
    {
        return $this->surnName;
    }


    public function setSurnName($surnName): void
    {
        $this->surnName = $surnName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }





}