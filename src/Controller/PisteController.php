<?php

namespace App\Controller;


use App\Repository\PisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PisteController extends AbstractController
{
    #[Route('/piste', name: 'app_piste')]
    public function index(PisteRepository $pisteRepository): Response
    {
        return $this->render('piste/index.html.twig', [
            'piste' => $pisteRepository->findAll()
        ]);
    }

}
