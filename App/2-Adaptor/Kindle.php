<?php

namespace App;

class Kindle implements eReaderInterface
{
    /**
     * Open the book
     *
     * @return void
     */
    public function turnOn()
    {
        var_dump('Turn the Kindle on.');
    }

    /**
     * Turn the page
     *
     * @return void
     */
    public function pressNextButton()
    {
        var_dump('Press the next button on the kindle.');
    }
}
