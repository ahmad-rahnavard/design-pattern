<?php

namespace App\Template;

abstract class Sub
{
    /**
     * @return mixed
     */
    public function make()
    {
        return $this
            ->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    /**
     * @return $this
     */
    protected function layBread()
    {
        var_dump('laying down te bread');

        return $this;
    }

    /**
     * @return $this
     */
    protected function addLettuce()
    {
        var_dump('adding some lettuce');

        return $this;
    }

    /**
     * @return $this
     */
    protected function addSauces()
    {
        var_dump('adding oil and vinegar');

        return $this;
    }

    /**
     * @return mixed
     */
    protected abstract function addPrimaryToppings();
}