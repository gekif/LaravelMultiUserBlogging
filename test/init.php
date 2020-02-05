<?php

// Lets require classes
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';


// Instantiate
$harry_potter = new Book(
    12345678,
    'Harry Potter and The Chamber of Wizard',
    'JK Rowling',
    10
);


$firstCustomer = new Customer(
    1,
    "Dzulfikar",
    "Ganteng",
    "Maulana",
    "dzulfikar.maulana@gmail.com"
);

$secondCustomer = new Customer(
    null,
    "Febrina",
    "Cantik",
    "Pujihastuti",
    "f.pujihastuti@gmail.com"
);

//$thirdCustomer = new Customer(
//    5,
//    "Kobe",
//    "Mamba",
//    "Bryant",
//    "kobe.bryant@mamba.com"
//);


//echo $harry_potter;


//var_dump($harry_potter->title);
//var_dump($firstCustomer);


/**
 * Testing Accessors
 */

//var_dump($firstCustomer->getFirstName());
//var_dump($firstCustomer->getFullName());
//var_dump($firstCustomer->getEmail());
//var_dump($firstCustomer->setEmail('tokofikar@gmail.com'));
//var_dump($firstCustomer->getEmail());

//var_dump($secondCustomer);


/**
 * Static Property and Method
 */
//var_dump($firstCustomer::getLastId());

// Reference it using existing instance
echo $firstCustomer::getLastId();

echo '<br>';

// Reference it using class name itself
echo Customer::getLastId();