<?php

namespace Acme;

interface BookInterface
{
    /**
     * Open the book
     *
     * @return void
     */
    public function open();

    /**
     * Turn the page
     *
     * @return void
     */
    public function turnPage();
}
