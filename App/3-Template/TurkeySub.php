<?php

namespace App\Template;

class TurkeySub extends Sub
{
    /**
     * @return $this|mixed
     */
    public function addPrimaryToppings()
    {
        var_dump('add some turkey');

        return $this;
    }
}