<?php

require 'vendor/autoload.php';

use Acme\OilChange;
use Acme\TireRotation;
use Acme\BasicInspection;

$service = new TireRotation(new OilChange(new BasicInspection));
echo $service->getCost() . "\n";
echo $service->getDescription() . "\n";
