<?php

use GearForMusic\Courier\Anc;
use GearForMusic\Courier\CourierInterface;
use GearForMusic\Courier\RoyalMail;
use PHPUnit\Framework\TestCase;

final class CourierTest extends TestCase
{
    /**
     * @dataProvider courierProvider
     */
    public function testCouriersHaveTheirPrefixAssignedToConsignmentNumbers(
        CourierInterface $courier,
        string $startsWith
    ) {
        $this->assertStringStartsWith($startsWith, $courier->generateConsignmentNumber());
    }

    public function courierProvider()
    {
        return [
            [
                new RoyalMail(),
                'RM'
            ],
            [
                new Anc(),
                'A'
            ]
        ];
    }
}
