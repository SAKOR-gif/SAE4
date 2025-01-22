<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FallController extends AbstractController
{
    #[Route('/fall', name: 'app_fall')]
    public function index(): Response
    {
        return $this->render('fall/index.html.twig', [
            'controller_name' => 'FallController',
        ]);
    }
    #[Route('/Cv', name: 'app_Cv')]
    public function Cv(): Response
    {
        return $this->render('Fall/Cv.html.twig', [
            'controller_name' => 'FallController',
        ]);
    }
    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('Fall/portfolio.html.twig', [
            'controller_name' => 'FallController',
        ]);
    }
    #[Route('/Formulaire', name: 'app_Formulaire')]
    public function Formulaire(): Response
    {
        return $this->render('Fall/Formulaire.html.twig', [
            'controller_name' => 'FallController',
        ]);
    }
    
}
