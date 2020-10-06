<?php

namespace GearForMusic\Courier;

interface CourierInterface
{
    /**
     * @param array $consignmentNumbers
     */
    public function sendConsignmentNumbers(array $consignmentNumbers): void;

    public function generateConsignmentNumber(): string;
}
