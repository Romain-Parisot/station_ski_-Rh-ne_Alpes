<?php

namespace App\DataFixtures;

use App\Entity\Event;
use App\Entity\Station;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EventFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $stationRepo = $manager->getRepository(Station::class);
        $allstation = $stationRepo->findAll();

        $allEvent = ["Atelier dégustation",
            "Event Red bull",
            "Event ESport",
            "Visite du domaine en hélicoptère",
            "Soirée autour du feu",
            "Expo sculpture de glace",
            "Event Initiation sculpture sur glace",
            "Bal de soirée",
            "Event création d'igloo",
            "Cours/stage biathlon",
            "Event saut a ski",
            "Compétition pro de ski",
            "Cani-rando",
            "Visite guidée rando",
            "Bataille de boule de neige",
            "Event Luge, Ski, Snow",
            "Descente piste nocturne",
            "Visite de la faune local"];

        for ($a = 0; $a<=count($allEvent)-1; $a++){
            $date = new DateTime('2000-01-01');

            $event = new Event();

            $event->setTitle($allEvent[$a]);

            $event->setDescription('Description de '. $allEvent[$a]);

            $event->setImage('image de '. $allEvent[$a]);

            $event->setDate($date);

            $event->setStation($allstation[rand(0, count($allstation)-1)]);

            $manager->persist($event);
        }
        $manager->flush();
    }
}
