<?php

namespace App\Template;

class VeggieSub extends Sub
{
    /**
     * @return $this|mixed
     */
    public function addPrimaryToppings()
    {
        var_dump('add some veggies');

        return $this;
    }

}