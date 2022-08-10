<?php

namespace App;
use Exception;
class Turnstile

{
 protected NFCcard $NFCcard;
 protected Location $location;
 protected Shops $Shops;

    /**
     * @param NFCcard $NFCcard
     */
    public function __construct(NFCcard $NFCcard, Location $location)
    {
        $this->NFCcard = $NFCcard;
        $this->location = $location;

    }

    public function open()
    {
        if($this->NFCcard->isBypass()==true)
        {
            return sprintf("\033[1;31m !!! ALARM !!!
 
  !!! ALARM !!!
 
  !!! ALARM !!!
            \033[0m");
        }

        if($this->NFCcard->getCredits()-$this->NFCcard->getNumberOfEntrances()<=0)
        {
            return ("\033[1;31m Out of credits. \033[0m");
        }

        return sprintf(
            'Welcome to  turnstile! Location:%s
 You requested %dx entrance.
 You have %d entrances left.',
            $this->location->getLocation(),
            $this->NFCcard->getNumberOfEntrances(),
            $a=$this->NFCcard->getCredits()-$this->NFCcard->getNumberOfEntrances()
        );



    }

    /**
     * @return NFCcard
     */
    public function getNFCcard(): NFCcard
    {
        return $this->NFCcard;
    }

    /**
     * @param NFCcard $NFCcard
     */
    public function setNFCcard(NFCcard $NFCcard): void
    {
        $this->NFCcard = $NFCcard;
    }



}