<?php

namespace App\Strategy;

interface Logger
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function log($data);
}