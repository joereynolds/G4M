<?php

use GearForMusic\Batch\Batch;
use GearForMusic\Consignment\Consignment;
use GearForMusic\Courier\Anc;
use GearForMusic\Courier\CourierInterface;
use GearForMusic\Courier\RoyalMail;
use PHPUnit\Framework\TestCase;

final class BatchTest extends TestCase
{
    public function testAddingAConsignmentAddsItToTheBatch()
    {
        $batch = new Batch();
        $batch->addConsignment(new Consignment(new RoyalMail()));

        $actual = $batch->getConsignments();
        $expected = [new Consignment(new RoyalMail())];

        $this->assertEquals(
            $expected,
            $batch->getConsignments()
        );
    }
}
