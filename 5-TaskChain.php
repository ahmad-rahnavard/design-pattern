<?php

require 'vendor/autoload.php';

use App\ResponsibilityChain\Alarm;
use App\ResponsibilityChain\Doors;
use App\ResponsibilityChain\Lights;
use App\ResponsibilityChain\HomeStatus;

$lights = new Lights();
$doors = new Doors();
$alarm = new Alarm();

$doors->succeedWith($lights);
$alarm->succeedWith($doors);

$alarm->check(new HomeStatus);