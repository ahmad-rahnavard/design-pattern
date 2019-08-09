<?php

namespace App\TaskChain;

use Exception;

class Alarm extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (! $home->alarmOn) {
            throw new Exception('The alarm is not set!! Abort abort.');
        }

        $this->next($home);
    }
}