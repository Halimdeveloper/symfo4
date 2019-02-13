<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig_Environment;

class HomeController {

    /**
     * @var Twig_Environment
     */
    private $twig;

    public function __construct( Twig_Environment $twig ) {
        $this->twig = $twig;
    }

    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response {
        return new Response( $this->twig->render( 'pages/home.html.twig' ) );
    }
}