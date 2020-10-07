<?php

namespace GearForMusic\Batch;

use GearForMusic\Consignment\ConsignmentInterface;
use GearForMusic\Courier\Anc;
use GearForMusic\Courier\RoyalMail;

class Batch implements BatchInterface
{
    /** @var ConsignmentInterface[] $consignments */
    private $consignments;

    /** @var array $sentConsignmentNumbers */
    private $sentConsignmentNumbers;

    /**
     * @param ConsignmentInterface[] $consignments
     */
    public function __construct(array $consignments = [])
    {
        $this->consignments = $consignments;
        $this->sentConsignmentNumbers = [];
    }

    public function start(): void
    {
        foreach($this->consignments as $consignment) {
            $this->sentConsignmentNumbers[$consignment->getNumber()] = $consignment;
        }
    }

    public function end(): void
    {
        $royalMail = new RoyalMail();
        $anc = new Anc();

        $royalMailConsignmentNumbers = [];
        $ancConsignmentNumbers = [];

        foreach($this->sentConsignmentNumbers as $consignmentNumber => $consignment) {
            if (is_a($consignment->getCourier(), RoyalMail::class)) {
                $royalMailConsignmentNumbers[] = $consignmentNumber;
            }
            if (is_a($consignment->getCourier(), Anc::class)) {
                $ancConsignmentNumbers[] = $consignmentNumber;
            }
        }

        $royalMail->sendConsignmentNumbers($royalMailConsignmentNumbers);
        $anc->sendConsignmentNumbers($ancConsignmentNumbers);
    }

    /**
     * @return ConsignmentInterface[]
     */
    public function getConsignments(): array
    {
        return $this->consignments;
    }

    public function addConsignment(ConsignmentInterface $consignment): void
    {
        $this->consignments[] = $consignment;
    }
}
