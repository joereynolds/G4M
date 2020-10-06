<?php

namespace GearForMusic\Courier;

class Anc implements CourierInterface
{
    public const COURIER_PREFIX = 'A';

    /**
     * @param array $consignmentNumbers
     */
    public function sendConsignmentNumbers(array $consignmentNumbers): void
    {
        // ftp here
    }

    public function generateConsignmentNumber(): string
    {
        return self::COURIER_PREFIX . sha1(rand());
    }
}
