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
    
    /**
     * @Route(
     *   "/hello/{name<[a-z A-Z]+>?World}",
     *   name = "hello",
     * )
     */
    public function hello ($name) {
        
        return new Response("Hello $name");
    }
}