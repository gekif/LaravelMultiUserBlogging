<?php

namespace Bookstore\Domain;

abstract class Customer extends Person
{
    private static $lastId = 0;

    private $id;
//    private $firstName;
//    private $surnName;
//    private $lastName;
    private $email;


    public function __construct(
        $id, $firstName, $surnName, $lastName, $email
    )
    {
//        $this->id = $id;

        parent::__construct($firstName, $surnName, $lastName);

        if ($id == null) {
            $this->id = ++self::$lastId;

        } else {
            $this->id = $id;

            if ($id > self::$lastId) {
                self::$lastId = $id;
            }
        }

        $this->firstName = $firstName;
        $this->surnName = $surnName;
        $this->lastName = $lastName;
        $this->email = $email;
    }


    // Accessors
    public static function getLastId()
    {
        return self::$lastId;
    }


    // Abstract Method
    abstract public function getMonthlyFee();
    abstract public function getAmountToBorrow();
    abstract public function getType();


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
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


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function getFullName()
    {
        return strtoupper($this->firstName . ' ' . $this->surnName . ' ' . $this->lastName);
    }


    public function sayHi()
    {
        return 'Howdy ' . $this->firstName . ', Parent Class: ' . parent::sayHi();
    }


}