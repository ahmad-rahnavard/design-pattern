<?php

namespace Acme;

class BasicInspection implements CarService
{
    /**
     * Override getCost function
     *
     * @return int
     */
    public function getCost()
    {
        return 25;
    }

    /**
     * Override getDescription function
     *
     * @return string
     */
    public function getDescription()
    {
        return 'Basic inspection';
    }
}
