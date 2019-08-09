<?php

namespace App\TaskChain;

use Exception;

class Doors extends HomeChecker
{
    /**
     * @param HomeStatus $home
     *
     * @throws Exception
     */
    public function check(HomeStatus $home)
    {
        if (! $home->doorsLocked) {
            throw new Exception('The doors are not locked!! Abort abort.');
        }

        $this->next($home);
    }
}