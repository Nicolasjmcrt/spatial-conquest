<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\PlanetRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/missions', name: 'missions_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository, PlanetRepository $planet): Response
    {
        return $this->render('missions/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
            'planets' => $planet->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'list')]
    public function list(Category $category, PlanetRepository $planet): Response
    {
        $stories = $category->getStories();

        return $this->render('missions/list.html.twig', [
            'category' => $category,
            'stories' => $stories,
            'planets' => $planet->findAll(),
        ]);
    }
}
