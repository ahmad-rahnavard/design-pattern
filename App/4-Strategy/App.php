<?php

namespace App\Strategy;

class App
{
    /**
     * @param $data
     * @param Logger|null $logger
     */
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile();
        $logger->log($data);
    }
}