<?php

require 'vendor/autoload.php';

use App\OilChange;
use App\TireRotation;
use App\BasicInspection;

$service = new TireRotation(new OilChange(new BasicInspection));
echo $service->getCost() . "\n";
echo $service->getDescription() . "\n";
