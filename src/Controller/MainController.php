<?php

namespace App\Controller;

use App\Entity\Planet;
use App\Repository\PlanetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(PlanetRepository $planet): Response
    {
        return $this->render('main/homepage.html.twig', [
            'planets' => $planet->findAll(),
        ]);
    }
}
