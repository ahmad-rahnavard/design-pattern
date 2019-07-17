<?php

namespace Acme;

interface BookInterface
{
    /**
     * Open the book
     */
    public function open();

    /**
     * Turn the page
     */
    public function turnPage();
}
