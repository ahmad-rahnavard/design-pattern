<?php

namespace App\Strategy;

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile();
        $logger->log($data);
    }
}