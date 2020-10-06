<?php

namespace GearForMusic\Batch;

use GearForMusic\Consignment\ConsignmentInterface;

interface BatchInterface
{
    public function start(): void;

    public function end(): void;

    public function addConsignment(ConsignmentInterface $consignment): void;
}
