<?php

namespace GearForMusic\Consignment;

use GearForMusic\Courier\CourierInterface;

interface ConsignmentInterface
{
    public function getNumber(): string;
    public function getCourier(): CourierInterface;
}
