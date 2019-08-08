<?php

namespace App\Template;

class TurkeySub extends Sub
{
    public function addPrimaryToppings()
    {
        var_dump('add some turkey');

        return $this;
    }
}