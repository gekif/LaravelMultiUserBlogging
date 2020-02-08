<?php

namespace Bookstore\Domain;

// Default arguments
// Type hinting

class Book
{
    // Properties are like variable
    public $isbn;
    public $title;
    public $author;
    public $available;


    public function __construct(
        int $isbn, string $title, string $author, int $available = 0)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }


    public function __toString()
    {
        $result = $this->title . ' by ' . $this->author;

        if (!$this->available) {
            $result .= ' is Not Available';
        }

        return $result;
    }


    // Another method
    public function getCopy()
    {
        if ($this->available < 1) {
            return false;

        } else {
            $this->available--;

            return true;
        }
    }

}

