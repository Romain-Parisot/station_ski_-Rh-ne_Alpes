<?php

namespace App\DataFixtures;

use App\Entity\Domaine;
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

        for ($x = 1; $x<=3; $x++){
            for ($y = 1; $y<=2; $y++){
                $station = new Station();
                $station->setDomaine($alldomaine[$x-1]);
                $station->setName($stationlistdomaine[$stationlistdomainenumber]);
                $station->setDescription($descstationlistdomaine[$stationlistdomainenumber]);
                $station->setLogo('url');

                $stationlistdomainenumber=$stationlistdomainenumber+1;

                $manager->persist($station);
            }
        }
        $manager->flush();
    }
}
