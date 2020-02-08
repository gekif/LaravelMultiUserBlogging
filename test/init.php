<?php

use Bookstore\Domain\Book as MyBook;
use Bookstore\Domain\Customer;

use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;
use Bookstore\Domain\Payer;


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


// Function process payment
function processPayment(Payer $payer, float $amount)
{
    if ($payer->isExtentOfTaxes()) {
        return $payer->isExtentOfTaxes();
    } else {
        $amount *= 1.20;
    }

    return $payer->pay($amount);

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


//var_dump(processPayment($firstCustomer, 100.00));
//echo '<br>';
//
//var_dump(processPayment($secondCustomer, 100.00));


var_dump($firstCustomer->getId());




