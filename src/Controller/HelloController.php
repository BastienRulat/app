<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController {
    
    /**
     * @Route(
     *   "/hello/{name<[a-z A-Z]+>?World}",
     *   name = "hello",
     * )
     */
    public function hello ($name) {
        
        return new Response($this->render("hello.html.twig", [
            'name' => $name,
            'ages' => [5,12,78,45,3,2,21]
        ]));
    }
}