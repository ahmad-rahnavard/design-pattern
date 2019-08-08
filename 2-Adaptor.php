<?php

require 'vendor/autoload.php';

use App\Nook;
use App\Book;
use App\Kindle;
use App\BookInterface;
use App\eReaderAdaptor;

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