<?php

namespace App\Strategy;

class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('Log data to a file.');
    }
}