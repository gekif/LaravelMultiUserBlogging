<?php

namespace Bookstore\Utils;

trait Unique
{
    private static $lastId = 0;

    private $id;

    public function setId(int $id)
    {
        if ($id == null) {
            $this->id = ++self::$lastId;

        } else {
            $this->id = $id;

            if ($id > self::$lastId) {
                self::$lastId = $id;
            }

        }

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return int
     */
    public static function getLastId(): int
    {
        return self::$lastId;
    }

    /**
     * @param int $lastId
     */
    public static function setLastId(int $lastId): void
    {
        self::$lastId = $lastId;
    }





}