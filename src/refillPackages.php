<?php

namespace App;

class refillPackages
{
    protected int $refill;

    /**
     * @param int $refill
     */
    public function __construct(int $refill)
    {
        $this->refill = $refill;
    }

    /**
     * @return int
     */
    public function getRefill(): int
    {
        return $this->refill;
    }

    /**
     * @param int $refill
     */
    public function setRefill(int $refill): void
    {
        $this->refill = $refill;
    }

}