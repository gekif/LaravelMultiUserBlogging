<?php

use Bookstore\Domain\Book as MyBook;
use Bookstore\Domain\Customer;

use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;


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

$harry_potter1 = new MyBook(
    12345678,
    'Harry Potter and The Chamber of Wizard',
    'JK Rowling',
    10
);

$harry_potter2 = new MyBook(
    12345678,
    'Harry Potter and The Chamber of Wizard',
    'JK Rowling',
    10
);

$harry_potter3 = new MyBook(
    12345678,
    'Harry Potter and The Chamber of Wizard',
    'JK Rowling',
    10
);


$firstCustomer = new Basic(
    1,
    "Dzulfikar",
    "Ganteng",
    "Maulana",
    "dzulfikar.maulana@gmail.com"
);

$secondCustomer = new Premium(
    null,
    "Febrina",
    "Cantik",
    "Pujihastuti",
    "f.pujihastuti@gmail.com"
);

var_dump(checkIfValid($firstCustomer, [
    $harry_potter, $harry_potter1,
    $harry_potter2, $harry_potter3
]));
echo '<br>';

var_dump($firstCustomer->getType());
echo '<br>';


