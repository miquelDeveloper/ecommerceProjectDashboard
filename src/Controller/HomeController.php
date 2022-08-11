<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
        /*return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);*/
    }
    /**
     * @Route("/start{name?}", name="start")
     */
    public function start(): Response
    {
        return new Response('<h1>Ok</h1>');
        /*return $this->render('main/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);*/
    }
}
