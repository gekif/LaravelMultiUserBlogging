<?php

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


    // Methods are function
//    public function getPrintableTitle()
//    {
//        $result = $this->title . ' by ' . $this->author;
//
//        if (!$this->available) {
//            $result .= ' Not Available';
//        }
//
//        return $result;
//    }


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


// Instantiate
//$harry_potter = new Book();

//$harry_potter->isbn = 12345678;
//$harry_potter->title = 'Harry Potter and The Chamber Of Wizard';
//$harry_potter->author = 'JK Rowling';
//$harry_potter->available = 0;


// Constructor
$harry_potter = new Book(
    12345678,
    'Harry Potter and The Chamber of Wizard',
    'JK Rowling'
//    , 10
);


//if ($harry_potter->getCopy()) {
//    echo "Here is your copy of " . $harry_potter->title . "<br>";
//} else {
//    echo "Sorry its gone!";
//}


//var_dump($harry_potter);


// Print __toString Magic Method
echo $harry_potter;