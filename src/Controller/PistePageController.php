<?php

namespace App\Controller;

use App\Repository\PisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PistePageController extends AbstractController
{
    #[Route('/piste_page/{id}', name: 'app_piste_page')]
    public function index($id, PisteRepository $pisteRepository): Response
    {
        $piste = $pisteRepository->find($id);


        if (!$piste) {
            throw $this->createNotFoundException('Piste not found');
        }

        return $this->render('piste_page/index.html.twig', [
            'piste' => $piste,
        ]);
    }
}
