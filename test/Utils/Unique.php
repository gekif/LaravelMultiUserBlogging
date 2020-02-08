<?php

namespace Bookstore\Utils;

use Exception;

trait Unique
{
    private static $lastId = 0;

    private $id;

    public function setId(int $id)
    {
        try {
            if ($id < 1) {
                throw new Exception("Id cannot be negative number");
            }

            if ($id == null) {
                $this->id = ++self::$lastId;

            } else {
                $this->id = $id;

                if ($id > self::$lastId) {
                    self::$lastId = $id;
                }

            }

        } catch (Exception $exception) {
            echo $exception->getMessage();

        } finally {
            echo "Done with try catch";
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