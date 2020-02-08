<?php

use Bookstore\Domain\Book as MyBook;
use Bookstore\Domain\Customer;


// Autoloader function to autoload classes
function autoloader($className)
{
    $lastSlash = strpos($className, '\\') + 1;
    $className = substr($className, $lastSlash);
    $directory = str_replace('\\', '/', $className);
    $fileName = __DIR__ . '/' . $directory . '.php';
    require_once $fileName;
}

spl_autoload_register('autoloader');


// Check if valid
function checkIfValid(Customer $customer, $books)
{
    return $customer->getAmountToBorrow() >= count($books);
}

// Instantiate
$harry_potter = new MyBook(
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
//echo $firstCustomer::getLastId();

//echo '<br>';

// Reference it using class name itself
//echo Customer::getLastId();

//echo '<br>';

//var_dump($firstCustomer);

//var_dump($firstCustomer->sayHi());

var_dump(checkIfValid($firstCustomer, $harry_potter));

