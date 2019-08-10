<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Observer\Login;
use App\Observer\LogHandler;
use App\Observer\EmailNotifier;
use App\Observer\LoginReporter;

$login = new Login;
$login->attach([
    new LogHandler(),
    new EmailNotifier(),
    new LoginReporter()
]);

$login->fire();
