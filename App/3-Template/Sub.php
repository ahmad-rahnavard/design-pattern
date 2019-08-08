<?php

namespace App\Template;

abstract class Sub
{

    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    protected function layBread()
    {
        var_dump('laying down te bread');

        return $this;
    }

    protected function addLettuce()
    {
        var_dump('adding some lettuce');

        return $this;
    }

    protected function addSauces()
    {
        var_dump('adding oil and vinegar');

        return $this;
    }

    protected abstract function addPrimaryToppings();
}