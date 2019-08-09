<?php


namespace App\Specification;


class Customer
{
    protected $type;

    /**
     * Customer constructor.
     *
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function type()
    {
        return $this->type;
    }
}