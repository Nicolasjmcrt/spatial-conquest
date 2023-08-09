<?php

namespace App\Controller;

use App\Entity\Story;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/stories', name: 'stories_')]
class StoryController extends AbstractController
{
    #[Route('/{slug}', name: 'show')]
    public function show(Story $story): Response
    {
        return $this->render('story/show.html.twig', compact('story'));
    }
}
