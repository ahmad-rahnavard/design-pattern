<?php

namespace App;

class Book implements BookInterface
{
    /**
     * Open the book
     *
     * @return void
     */
    public function open()
    {
        var_dump('Opening the paper book.');
    }

    /**
     * Turn the page
     *
     * @return void
     */
    public function turnPage()
    {
        var_dump('turning the page of the paper book.');
    }
}
