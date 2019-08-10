<?php

namespace App\Observer;

interface Subject
{
    /**
     * @param $observer
     *
     * @return mixed
     */
    public function attach($observer);

    /**
     * @param $index
     *
     * @return mixed
     */
    public function detach($index);

    /**
     * @return mixed
     */
    public function notify();
}
