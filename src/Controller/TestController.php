<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {
 
    /**
     * @Route(
     *   "/",
     *   name="/"
     * ) 
     */
    public function index () {
        
        return new Response(
            dump("index"),
            200,
            ['tite'=>'TITRE']
        );
    }
    
    /**
     * @Route(
     *   "/maroute/{age<\d+>?0}",
     *   name    = "maroute",
     *   methods = {"GET"},
     *   host    = "localhost",
     *   schemes = {"https"} 
     * )
     */
    public function maRoute (Request $request, $age) {
        
        return new Response("Vous avez $age ans");
    }

}