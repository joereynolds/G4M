<?php

require_once __DIR__ . '/vendor/autoload.php';

use GearForMusic\Batch\Batch;
use GearForMusic\Consignment\Consignment;
use GearForMusic\Courier\Anc;
use GearForMusic\Courier\RoyalMail;

$royalMailConsignment = new Consignment(new RoyalMail());

$batch = new Batch([$royalMailConsignment]);

$batch->addConsignment(new Consignment(new Anc()));

$batch->start();
$batch->end();
