<?php

namespace GearForMusic\Courier;

use GearForMusic\Courier\CourierInterface;

class RoyalMail implements CourierInterface
{
    public const COURIER_PREFIX = 'RM';

    /**
     * @param array $consignmentNumbers
     */
    public function sendConsignmentNumbers(array $consignmentNumbers): void
    {
        // email here
    }

    public function generateConsignmentNumber(): string
    {
        return self::COURIER_PREFIX . bin2hex(random_bytes(16));
    }
}
