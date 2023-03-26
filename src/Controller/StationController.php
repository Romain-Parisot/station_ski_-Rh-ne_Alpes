<?php

namespace App\Controller;

use App\Entity\Station;
use App\Repository\DomaineRepository;
use App\Repository\PisteRepository;
use App\Repository\RemonteMecaRepository;
use App\Repository\StationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StationController extends AbstractController
{
    #[Route('/station/{id}', name: 'app_station')]
    public function show($id, StationRepository $stationRepository, PisteRepository $pisteRepository, DomaineRepository $domaineRepository,  RemonteMecaRepository $remontemecaRepository): Response
    {

        $domaine = $domaineRepository->find($id);

        if (!$domaine) {
            throw $this->createNotFoundException('Domaine not found');
        }

        $station = $stationRepository->findBy(['domaine' => $domaine]);

        if (!$station) {
            throw $this->createNotFoundException('Station not found');
        }

        return $this->render('station/index.html.twig', [
            'station' => $station,
            'piste' => $pisteRepository->findAll(),
            'remontemeca' => $remontemecaRepository -> findAll()
        ]);
    }
}