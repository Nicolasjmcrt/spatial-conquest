<?php

namespace App\Controller\Admin;

use App\Entity\Story;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\StoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    private StoryRepository $storyRepository;

    public function __construct(StoryRepository $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $latestStories = $this->storyRepository
            ->findBy([], ['id' => 'DESC'], 5);

        return $this->render('admin/index.html.twig', [
            'latestStories' => $latestStories
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('History of the space conquest');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-dashboard');
        yield MenuItem::linkToUrl('Homepage', 'fas fa-home', $this->generateUrl('homepage'));
        yield Menuitem::linkToCrud('Chapters', 'fa-solid fa-book', Category::class);
        yield MenuItem::linkToCrud('Stories', 'fa-solid fa-shuttle-space', Story::class);
    }

    public function configureCrud(): Crud
    {
        return parent::configureCrud()
            ->setDefaultSort([
                'id' => 'DESC'
            ]);
    }

    public function configureActions(): Actions
    {
        return parent::configureActions()
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }
}
