<?php

namespace App\Controller;

use App\Entity\Planet;
use App\Repository\PlanetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/planets', name: 'planets_')]
class PlanetController extends AbstractController
{
    #[Route('/{slug}', name: 'show')]
    public function show(Planet $planet, PlanetRepository $planetRepository): Response
    {
        return $this->render('planet/show.html.twig', [
            'planets' => $planetRepository->findAll(),
            'planet' => $planet,
        ]);
    }
}
