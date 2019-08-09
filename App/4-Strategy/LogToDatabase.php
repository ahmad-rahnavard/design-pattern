<?php

namespace App\Strategy;

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('Log data to a database.');
    }
}