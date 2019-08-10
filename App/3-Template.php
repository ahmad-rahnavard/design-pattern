<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Template\TurkeySub;
use App\Template\VeggieSub;

(new TurkeySub())->make();
(new VeggieSub())->make();
