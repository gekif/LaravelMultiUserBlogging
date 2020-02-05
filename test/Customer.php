<?php

class Customer
{
    private static $lastId = 0;

    private $id;
    private $firstName;
    private $surnName;
    private $lastName;
    private $email;


    public function __construct(
        $id, $firstName, $surnName, $lastName, $email
    )
    {
//        $this->id = $id;

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


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getSurnName()
    {
        return $this->surnName;
    }

    /**
     * @param mixed $surnName
     */
    public function setSurnName($surnName): void
    {
        $this->surnName = $surnName;
    }


    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }


    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function getFullName()
    {
        return strtoupper($this->firstName . ' ' . $this->surnName . ' ' . $this->lastName);
    }





}