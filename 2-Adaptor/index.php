<?php

require 'vendor/autoload.php';

use Acme\Book;
use Acme\Kindle;
use Acme\BookInterface;
use Acme\KindleAdaptor;
use Acme\eReaderInterface;

class Person
{
//    public function read(BookInterface $book)
    public function read(eReaderInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

//(new Person())->read(new Book());
(new Person())->read(new KindleAdaptor(new Kindle()));
