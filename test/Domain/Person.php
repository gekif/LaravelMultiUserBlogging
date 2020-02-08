<?php

namespace Bookstore\Domain;

use Bookstore\Utils\Unique;


class Person
{
    use Unique;

    private $email;

    protected $firstName;
    protected $surnName;
    protected $lastName;


    public function __construct(
        $id, $firstName, $surnName, $lastName, $email
    )
    {
        $this->setId($id);

        $this->firstName = $firstName;
        $this->surnName = $surnName;
        $this->lastName = $lastName;
        $this->email = $email;

    }


    // Accessors
//    public static function getLastId()
//    {
//        return self::$lastId;
//    }


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


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
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
        return 'Hi, What\'s up ' . $this->firstName;
    }





}