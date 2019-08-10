<?php

namespace App\Observer;

class LogHandler implements Observer
{
    public function handle()
    {
        var_dump('log sth important.');
    }
}
