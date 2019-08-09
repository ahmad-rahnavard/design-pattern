<?php

use App\Strategy\App;
use App\Strategy\LogToFile;
use App\Strategy\LogToDatabase;
use App\Strategy\LogToWebservice;

require 'vendor/autoload.php';

(new App())->log('Some data');
(new App())->log('Some data', new LogToFile());
(new App())->log('Some data', new LogToDatabase());
(new App())->log('Some data', new LogToWebservice());