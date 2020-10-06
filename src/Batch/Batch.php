<?php

namespace GearForMusic\Batch;

use GearForMusic\Consignment\ConsignmentInterface;

class Batch implements BatchInterface
{
    /** @var ConsignmentInterface[] $consignments */
    private $consignments;

    /** @var array $sentConsignmentNumbers */
    private $sentConsignmentNumbers;
    /**
     * @param ConsignmentInterface[] $consignments
     */
    public function __construct(array $consignments)
    {
        $this->consignments = $consignments;
        $this->sentConsignmentNumbers = [];
    }

    public function process()
    {
        foreach($this->consignments as $consignment) {
            $this->sentConsignmentNumbers[$consignment->getNumber()] = $consignment;
        }
    }

    public function end()
    {
    }

    public function addConsignment(ConsignmentInterface $consignment): void
    {
        $this->consignments[] = $consignment;
    }
}
