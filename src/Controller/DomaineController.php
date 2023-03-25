<?php

namespace App\Controller;

use App\Repository\StationRepository;
use App\Repository\DomaineRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DomaineController extends AbstractController
{
    #[Route('/domaine', name: 'app_domaine')]
    public function index( DomaineRepository $domaineRepository): Response
    {

        return $this->render('domaine/index.html.twig', [
            'domaine' => $domaineRepository->findAll(),
        ]);
    }
}
