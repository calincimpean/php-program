<?php

namespace App;

class Shops
{

 protected Location $location;
 protected refillPackages $prepaidPackages;
 protected Shops $Shops;

    /**
     * @param Location $location
     * @param refillPackages $prepaidPackages
     */
    public function __construct(Location $location, refillPackages $prepaidPackages)
    {
        $this->location = $location;
        $this->prepaidPackages = $prepaidPackages;
    }


    public function packages()
    {
        if (
            $this->prepaidPackages->getRefill()!=5 &&
            $this->prepaidPackages->getRefill()!=10 &&
            $this->prepaidPackages->getRefill()!=15 &&
            $this->prepaidPackages->getRefill()!=25
          )
        {
            return sprintf("\033[1;31m Refill package not found try 5,10,15,25 \033[0m");
        }
        return ('Refil completed');
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * @return refillPackages
     */
    public function getPrepaidPackages(): refillPackages
    {
        return $this->prepaidPackages;
    }

    /**
     * @param refillPackages $prepaidPackages
     */
    public function setPrepaidPackages(refillPackages $prepaidPackages): void
    {
        $this->prepaidPackages = $prepaidPackages;
    }

    /**
     * @return Shops
     */
    public function getShops(): Shops
    {
        return $this->Shops;
    }

    /**
     * @param Shops $Shops
     */
    public function setShops(Shops $Shops): void
    {
        $this->Shops = $Shops;
    }




}