<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function helloAction()
    {
        return $this->twig->render('hello.html.twig');
    }
}