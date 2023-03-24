<?php

namespace App\Controller;

use App\Repository\InformationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfosController extends AbstractController
{
    #[Route('/infos', name: 'app_infos')]
    public function index(InformationRepository $informationRepository): Response
    {

        $infos = $informationRepository->findAll();

        return $this->render('infos/index.html.twig', [
            'infos' => $infos,
        ]);
    }
}
