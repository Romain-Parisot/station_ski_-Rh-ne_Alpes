<?php

namespace App\DataFixtures;

use App\Entity\Domaine;
use App\Entity\Piste;
use App\Entity\RemonteMeca;
use App\Entity\Station;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $domainelist = ["Les 2 Alpes", "Val d'Isère", "La Clusaz"];
        $descdomainelist = ["Ce domaine skiable est situé dans le département de l'Isère et offre 225 km de pistes, dont la plus longue piste de ski d'Europe.", "Ce domaine skiable est situé dans la vallée de la Tarentaise et est connu pour être l'un des plus beaux et des plus prestigieux domaines skiables du monde.", " Situé dans le massif des Aravis, ce domaine skiable offre plus de 130 km de pistes et est connu pour son cadre naturel préservé et son ambiance authentique de village de montagne."];
        $urldomainelist = ["https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Les2Alpes.jpg/1200px-Les2Alpes.jpg", "https://etincelles.com/wp-content/uploads/2022/05/08-val-disere-vue-du-village.jpg", "https://cdn.france-montagnes.com/sites/default/files/styles/station_slideshow_large/public/station/hiver/La-Clusaz-Hiver-19-20-BD-C.HUDRY-21.jpg?itok=T4jXENBr"];

        $stationlistdomaine = ["Mont-de-Lans", "Venosc", "Tignes", "Val d'Isère", "Le Grand-Bornand", "Manigod"];
        $descstationlistdomaine = ["Mont-de-Lans est une commune située dans les Alpes françaises, dans le département de l'Isère. Elle abrite notamment la station de ski Les Deux Alpes, connue pour son glacier skiable en été.", "Venosc est un village situé dans la vallée de la Romanche, également dans les Alpes françaises, non loin de Mont-de-Lans. Il est relié à la station de ski des Deux Alpes par une télécabine.", "Val d'Isère est une station de ski renommée située dans les Alpes françaises, dans le département de la Savoie. Elle fait partie du domaine skiable de l'Espace Killy, qui comprend également la station de Tignes.", "Tignes est une station de ski située dans les Alpes françaises, également dans le département de la Savoie. Elle est connue pour son domaine skiable étendu et son glacier skiable en été, ainsi que pour son accueil de compétitions de sports d'hiver.", "Le Grand-Bornand est une commune située dans les Alpes françaises, dans le département de la Haute-Savoie. Elle abrite une station de ski familiale ainsi qu'un village traditionnel préservé.", "Manigod est une commune également située dans les Alpes françaises, dans le département de la Haute-Savoie. Elle abrite une petite station de ski, ainsi que des villages traditionnels et des alpages préservés."];
        $stationlistdomainenumber = 0;

        $pistelistname = ["La Sarenne", "La Belle Etoile", "Le Glacier", "La Côte", "Le Vallon", "Le Pas de l'Oeille", "La Face de Bellevarde", "La Face", "La Piste L", "La Grande Motte", "La Sache", "Le Snowpark", "La Joyère", "La Floria", "Le Bois Joli", "La Tête de Cabeau", "Le Col de Merdassier", "Les Echarmeaux"];
        $pistelistniveau = ["Noire", "Bleue", "Rouge", "Bleue", "Rouge", "Noire", "Noire", "Rouge", "Noire", "Bleue", "Rouge", "Noire", "Bleue", "Rouge", "Noire",  "Bleue", "Rouge", "Noire" ];
        $pistelistmsg = ["il s'agit de la piste la plus longue d'Europe avec une longueur de 16 km et un dénivelé de 1 700 mètres. Elle est considérée comme l'une des pistes les plus difficiles des Deux Alpes.", "cette piste est une belle piste bleue, large et accessible, qui offre de superbes vues sur le massif des Ecrins.", "située sur le glacier, cette piste rouge offre un dénivelé de 700 mètres et est considérée comme l'une des pistes les plus techniques de la station.", "cette piste est idéale pour les débutants et offre une vue magnifique sur la vallée du Vénéon.", "cette piste est un peu plus technique que La Côte et offre de superbes vues sur le massif des Ecrins.", "cette piste est réservée aux skieurs les plus expérimentés et offre une descente raide et technique avec des passages étroits.", "c'est l'une des pistes les plus mythiques de Val d'Isère, avec une descente vertigineuse et technique de plus de 1 000 mètres de dénivelé.", "cette piste est également très technique et offre de superbes vues sur le massif de la Vanoise.", "cette piste est considérée comme l'une des plus difficiles de la station avec des passages très raides et des virages serrés.", "cette piste offre une vue imprenable sur les glaciers de la Grande Motte et est idéale pour les skieurs intermédiaires.", "cette piste est plus technique que la Grande Motte et offre des passages étroits et techniques dans la forêt.", "situé sur le secteur du Val Claret, ce snowpark est réservé aux skieurs confirmés et offre des modules et des sauts de haut niveau.", "cette piste est idéale pour les débutants et offre une vue magnifique sur les montagnes environnantes.", "cette piste est un peu plus technique que La Joyère et offre une descente en forêt très agréable.", "cette piste est réservée aux skieurs les plus expérimentés et offre une descente raide et technique avec des passages étroits.", "cette piste est idéale pour les débutants et offre une vue magnifique sur les Aravis.", "cette piste offre une descente assez raide avec des virages serrés dans un paysage de montagne magnifique.", "cette piste est réservée aux skieurs de fond et offre une vue imprenable sur les montagnes environnantes lors d'une balade en pleine nature."];
        $pistelistnumber = 0;

        for ($i = 1; $i <= 3; $i++) {
            $domaine = new Domaine();
            $domaine->setName($domainelist[$i-1]);
            $domaine->setDescription($descdomainelist[$i-1]);
            $domaine->setLogo($urldomainelist[$i-1]);

            $manager->persist($domaine);
        }
        $manager->flush();

        $domaineRepo = $manager->getRepository(Domaine::class);
        $alldomaine = $domaineRepo->findAll();

        for ($x = 1; $x<=3; $x++) {
            for ($y = 1; $y <= 2; $y++) {
                $station = new Station();
                $station->setDomaine($alldomaine[$x - 1]);
                $station->setName($stationlistdomaine[$stationlistdomainenumber]);
                $station->setDescription($descstationlistdomaine[$stationlistdomainenumber]);
                $station->setLogo('url');

                $stationlistdomainenumber = $stationlistdomainenumber + 1;

                $manager->persist($station);
            }
        }
        $manager->flush();


        $stationRepo = $manager->getRepository(Station::class);
        $allstation = $stationRepo->findAll();

        for ($m = 1; $m<=6; $m++){
            for ($n = 1; $n<=3; $n++){
                $piste = new Piste();
                $piste->setName($pistelistname[$pistelistnumber]);
                $piste->setLevel($pistelistniveau[$pistelistnumber]);

                $piste->setMessage($pistelistmsg[$pistelistnumber]);
                if ($pistelistnumber==17){
                    $piste->setIsAlpin(true);
                }
                else{
                    $piste->setIsAlpin(false);
                }
                $piste->setIsClose(0);

                $piste->setStation($allstation[$m-1]);

                $pistelistnumber=$pistelistnumber+1;

                $manager->persist($piste);

            }
        }
        $manager->flush();

        $typelistremontemeca = ["Téléski", "Télésiège", "Tapis Roulant", "Téléphérique"];
        for ($a = 1; $a<=6; $a++){
            for ($b = 1; $b<=5; $b++){
                $remontemeca = new RemonteMeca();

                $remontemeca->setStation($allstation[$a-1]);

                $remontemeca->setType($typelistremontemeca[rand(0,3)]);

                $remontemeca->setIsClose(0);

                $manager->persist($remontemeca);

            }
        }
        $manager->flush();
    }
}