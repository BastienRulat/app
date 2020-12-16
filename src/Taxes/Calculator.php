<?php

namespace App\Taxes;

use Psr\Log\LoggerInterface;

class Calculator {
 
    protected $logger;
    protected $TVA;

    public function __construct(LoggerInterface $logger, float $TVA) {
        $this->logger = $logger;
        $this->TVA = $TVA;
    }
        
    public function calculTVA (float $value) {
        
        $this->logger->info("Calcul de $value");
        return $value * (20 / 100);
    }
}