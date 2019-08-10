<?php

require '../vendor/autoload.php';

use App\Decorator\OilChange;
use App\Decorator\TireRotation;
use App\Decorator\BasicInspection;

$service = new TireRotation(new OilChange(new BasicInspection));
echo $service->getCost() . "\n";
echo $service->getDescription() . "\n";
