<?php

use App\Template\TurkeySub;
use App\Template\VeggieSub;

require 'vendor/autoload.php';

(new TurkeySub())->make();
(new VeggieSub())->make();