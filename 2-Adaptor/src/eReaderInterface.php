<?php

namespace Acme;

interface eReaderInterface
{
    /**
     * Open the book
     *
     * @return void
     */
    public function turnOn();

    /**
     * Turn the page
     *
     * @return void
     */
    public function pressNextButton();
}
