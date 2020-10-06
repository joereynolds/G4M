<?php

use GearForMusic\Consignment\ConsignmentInterface;
use GearForMusic\Courier\CourierInterface;

class Consignment implements ConsignmentInterface
{
    /** @var CourierInterface */
    public $courier;

    public function __construct(CourierInterface $courier)
    {
        $this->courier = $courier;
    }

    public function getNumber(): string
    {
        return $this->courier->generateConsignmentNumber();
    }
}
