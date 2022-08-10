<?php

require 'vendor/autoload.php';

$persone = new \App\NFCcard
(
    true,
    10,
    2,
    'John',
    'Smith'
);
$location = new \App\Location('New York');
$prepaidPackages = new \App\refillPackages(7);



$turnstile = new \App\Turnstile($persone,$location);
$result = $turnstile->open();

$Refill = new \App\Shops($location,$prepaidPackages);
$result2 = $Refill->packages();

echo "\033[1;32m $result2  \033[0m";
