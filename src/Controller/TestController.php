<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController {

    /**
     * 
     */
    public function index () {
        
        return new Response(
            dump("index"),
            200,
            ['tite'=>'TITRE']
        );
    }
    
    //   maroute:
    //   path: /maroute/{age<\d+>?0}
    //   controller: App\Controller\TestController::maRoute
    //   methods: [GET]
    //   host: localhost
    //   schemes: [https]
    /**
     * @Route(
     *   "/maroute/{age<\d+>?0}",
     *   name    = "maRoute",
     *   methods = {"GET"},
     *   host    = "localhost",
     *   schemes = {"https"} 
     * )
     */
    public function maRoute (Request $request, $age) {
        
        return new Response("Vous avez $age ans");
    }

}