<?php

require 'vendor/autoload.php';

use Acme\Book;
use Acme\BookInterface;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person())->read(new Book);
