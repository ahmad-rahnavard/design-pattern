<?php

namespace App;

class OilChange implements CarService
{
    protected $carService;

    /**
     * __construct function
     *
     * @param CarService $carService comment about this variable
     */
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    /**
     * Override getCost function
     *
     * @return int
     */
    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

    /**
     * Override getDescription function
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->carService->getDescription() . ', and oil changing';
    }
}
