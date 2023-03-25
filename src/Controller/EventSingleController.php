<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventSingleController extends AbstractController
{
    #[Route('/event/{id}', name: 'app_event_show')]
    public function show($id , EventRepository $eventRepository)
    {
        $event = $eventRepository->find($id);

        if (!$event) {
            throw $this->createNotFoundException('L\'événement n\'existe pas.');
        }

        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }
}
