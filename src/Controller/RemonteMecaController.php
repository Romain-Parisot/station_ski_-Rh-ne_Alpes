<?php

namespace App\Controller;

use App\Repository\RemonteMecaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RemonteMecaController extends AbstractController
{
    #[Route('/remonte/meca/{id}', name: 'app_remonte_meca')]
    public function index($id, RemonteMecaRepository $remontemecaRepository): Response
    {
        $remontemeca = $remontemecaRepository->find($id);
        return $this->render('remonte_meca/index.html.twig', [
           'remontemeca' => $remontemeca
        ]);
    }
}
