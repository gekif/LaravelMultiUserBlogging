<?php

class Book
{
    // Properties
    public $isbn;
    public $title;
    public $author;
    public $available;
}

// Instantiate
$harry_potter = new Book();

$harry_potter->isbn = 12345678;
$harry_potter->title = 'Harry Potter and The Chamber Wizard';
$harry_potter->author = 'JK Rowling';
$harry_potter->available = 10;

var_dump($harry_potter);