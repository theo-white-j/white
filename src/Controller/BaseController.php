<?php


namespace App\Controller;


use Doctrine\DBAL\Platforms\Keywords\ReservedKeywordsValidator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class BaseController
{
    public function index(){
        return new Response("salut les gens!");
    }

    public function test()
    {
        return new Response("testpage!");
    }


    /**
     * @Route("/test2")
     */
    public function test2(Environment $twig)
    {
        #return new Response("testpage 2!");
        return new Response($twig->render('pages/test2.html.twig'));
    }
}