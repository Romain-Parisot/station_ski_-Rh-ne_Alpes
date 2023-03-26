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
<<<<<<< HEAD
    public function show($id, StationRepository $stationRepository, PisteRepository $pisteRepository, DomaineRepository $domaineRepository,  RemonteMecaRepository $remontemecaRepository): Response
=======
    public function show($id, StationRepository $stationRepository, PisteRepository $pisteRepository, DomaineRepository $domaineRepository): Response
>>>>>>> 8b8033a28a7db34838067938c66891412044f6c3
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
<<<<<<< HEAD
            'station' => $station,
            'piste' => $pisteRepository->findAll(),
            'remontemeca' => $remontemecaRepository -> findAll()
=======
            'stations' => $station,
            'piste' => $pisteRepository->findAll(),
            'domaine' => $domaine
>>>>>>> 8b8033a28a7db34838067938c66891412044f6c3
        ]);
    }
}