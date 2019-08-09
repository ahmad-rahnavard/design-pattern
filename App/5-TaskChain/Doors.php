<?php

namespace App\TaskChain;

use Exception;

class Doors extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->doorsLocked) {
            throw new Exception('The doors are not locked!! Abort abort.');
        }

        $this->next($home);
    }
}