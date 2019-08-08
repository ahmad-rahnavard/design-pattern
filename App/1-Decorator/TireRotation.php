<?php

namespace App\Decorator;

class TireRotation implements CarService
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
        return 15 + $this->carService->getCost();
    }

    /**
     * Override getDescription function
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->carService->getDescription() . ', and tier rotation';
    }
}

$service = new TireRotation(new OilChange(new BasicInspection));
echo $service->getCost() . "\n";
echo $service->getDescription() . "\n";
