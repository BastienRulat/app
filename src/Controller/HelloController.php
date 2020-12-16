<?php

namespace App\Controller;

use App\Taxes\Calculator;
use App\Taxes\Detector;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }
    
    /**
     * @Route(
     *   "/hello/{name<[a-z A-Z]+>?World}",
     *   name = "hello",
     * )
     */
    public function hello ($name, Calculator $calculator, Slugify $slugify, Detector $detector) {
        $this->logger->info("Function Hello");
        dump($slugify->slugify("Hello World"));
        dump($detector->detect(102));
        dump($detector->detect(10));
        return new Response("Hello $name paye ".$calculator->calculTVA(200));
    }
}