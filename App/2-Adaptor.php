<?php

require '../vendor/autoload.php';

use App\Adaptor\Nook;
use App\Adaptor\Book;
use App\Adaptor\Kindle;
use App\Adaptor\BookInterface;
use App\Adaptor\eReaderAdaptor;

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
