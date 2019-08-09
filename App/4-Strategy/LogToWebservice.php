<?php

namespace App\Strategy;

class LogToWebservice implements Logger
{
    public function log($data)
    {
        var_dump('Log data to a webservice.');
    }
}