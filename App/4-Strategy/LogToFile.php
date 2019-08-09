<?php

namespace App\Strategy;

class LogToFile implements Logger
{
    /**
     * @param $data
     *
     * @return mixed|void
     */
    public function log($data)
    {
        var_dump('Log data to a file.');
    }
}