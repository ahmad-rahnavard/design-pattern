<?php

namespace App\Strategy;

class LogToWebservice implements Logger
{
    /**
     * @param $data
     *
     * @return mixed|void
     */
    public function log($data)
    {
        var_dump('Log data to a webservice.');
    }
}