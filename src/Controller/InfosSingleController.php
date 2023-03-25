<?php

namespace App\Controller;

use App\Repository\InformationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfosSingleController extends AbstractController
{
    #[Route('/infos/{id}', name: 'app_infos_show')]
    public function show($id , InformationRepository $informationRepository)
    {
        $info = $informationRepository->find($id);

        if (!$info) {
            throw $this->createNotFoundException('L\'événement n\'existe pas.');
        }

        return $this->render('infos/show.html.twig', [
            'info' => $info,
        ]);
    }
}
