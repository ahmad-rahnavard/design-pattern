<?php

namespace App\Adaptor;

class Nook implements eReaderInterface
{
    /**
     * Open the book
     *
     * @return void
     */
    public function turnOn()
    {
        var_dump('Turn the Nook on.');
    }

    /**
     * Turn the page
     *
     * @return void
     */
    public function pressNextButton()
    {
        var_dump('Press the next button on the nook.');
    }
}
