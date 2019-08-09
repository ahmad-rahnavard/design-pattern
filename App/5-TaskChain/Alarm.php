<?php

namespace App\TaskChain;

use Exception;

class Alarm extends HomeChecker
{
    /**
     * @param HomeStatus $home
     *
     * @throws Exception
     */
    public function check(HomeStatus $home)
    {
        if (! $home->alarmOn) {
            throw new Exception('The alarm is not set!! Abort abort.');
        }

        $this->next($home);
    }
}