<?php

namespace App\Controller\Admin;

use App\Entity\Piste;
use App\Entity\RemonteMeca;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StationDashboardController extends AbstractDashboardController
{
    #[Route('/station', name: 'station')]
    public function index(): Response
    {
        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(StationCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Station jsp');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Informations', 'fa fa-home');
        yield MenuItem::linkToCrud('Pistes', 'fas fa-list', Piste::class);
        yield MenuItem::linkToCrud('Remontées Mécaniques', 'fas fa-list', RemonteMeca::class);
    }
}
