<?php

namespace App\TaskChain;

abstract class HomeChecker
{
    protected $successor;

    /**
     * @param HomeStatus $home
     *
     * @return mixed
     */
    public abstract function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    /**
     * @param HomeStatus $home
     */
    public function next(HomeStatus $home)
    {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}