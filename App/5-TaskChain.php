<?php

require __DIR__ . '/../vendor/autoload.php';

use App\TaskChain\Alarm;
use App\TaskChain\Doors;
use App\TaskChain\Lights;
use App\TaskChain\HomeStatus;

$lights = new Lights();
$doors = new Doors();
$alarm = new Alarm();

$doors->succeedWith($lights);
$alarm->succeedWith($doors);

$alarm->check(new HomeStatus);
