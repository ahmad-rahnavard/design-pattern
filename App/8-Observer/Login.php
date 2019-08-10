<?php

namespace App\Observer;

use Exception;

class Login implements Subject
{
    protected $observers = [];

    /**
     * @param $observable
     *
     * @return $this
     * @throws Exception
     */
    public function attach($observable)
    {
        if (is_array($observable)) {
            return $this->attachObserver($observable);
        }

        $this->observers[] = $observable;

        return $this;
    }

    /**
     * @param $index
     */
    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    /**
     * @param $observable
     *
     * @throws Exception
     */
    public function attachObserver($observable)
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer) {
                throw new Exception;
            }
            $this->attach($observer);
        }
        return;
    }

    public function fire()
    {
        // perform login
        $this->notify();
    }
}
