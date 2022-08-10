<?php

namespace App;

class NFCcard
{
    protected bool $bypass;
    protected int $credits;
    protected int $numberOfEntrances;
    protected string $firstName;
    protected string $lastName;

    /**
     * @param int $credits
     * @param int $numberOfEntrances
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     */
    public function __construct(bool $bypass,int $credits, int $numberOfEntrances, string $firstName, string $lastName)
    {
        $this->bypass = $bypass;
        $this->credits = $credits;
        $this->numberOfEntrances = $numberOfEntrances;
        $this->firstName = $firstName;
        $this->lastName = $lastName;

    }


    /**
     * @return int
     */
    public function getCredits(): int
    {
        return $this->credits;
    }

    /**
     * @param int $credits
     */
    public function setCredits(int $credits): void
    {
        $this->credits = $credits;
    }

    /**
     * @return int
     */
    public function getNumberOfEntrances(): int
    {
        return $this->numberOfEntrances;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }



    /**
     * @param int $numberOfEntrances
     */
    public function setNumberOfEntrances(int $numberOfEntrances): void
    {
        $this->numberOfEntrances = $numberOfEntrances;
    }

    /**
     * @return bool
     */
    public function isBypass(): bool
    {
        return $this->bypass;
    }

    /**
     * @param bool $bypass
     */
    public function setBypass(bool $bypass): void
    {
        $this->bypass = $bypass;
    }



}