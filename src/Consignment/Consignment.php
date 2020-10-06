<?php

namespace GearForMusic\Consignment;

use GearForMusic\Consignment\ConsignmentInterface;
use GearForMusic\Courier\CourierInterface;

class Consignment implements ConsignmentInterface
{
    /** @var CourierInterface */
    private $courier;

    public function __construct(CourierInterface $courier)
    {
        $this->courier = $courier;
    }

    public function getNumber(): string
    {
        return $this->courier->generateConsignmentNumber();
    }

    public function getCourier(): CourierInterface
    {
        return $this->courier;
    }
}
