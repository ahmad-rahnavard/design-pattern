<?php

require 'vendor/autoload.php';

use Acme\Nook;
use Acme\Book;
use Acme\Kindle;
use Acme\BookInterface;
use Acme\eReaderAdaptor;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person())->read(new Book());
(new Person())->read(new eReaderAdaptor(new Kindle()));
(new Person())->read(new eReaderAdaptor(new Nook()));
