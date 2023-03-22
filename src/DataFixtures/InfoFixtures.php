<?php

namespace App\DataFixtures;

use App\Entity\Information;
use App\Entity\Station;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InfoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $titleinfolist = ["Les activités disponible pendant l'été", "Les meilleurs restaurants de la région", "Les meilleurs hotel de la région", "La connexion Wifi et 4G", "Les prix de location de ski", "Les marque de ski présent dans notre région", "L'affluence lors des périodes touristique", "L'évolution de la qualité de la neige", "La météo lors des période de forte affluencce dans la région"];
        $descinfolist = ["L'été est enfin là, et avec lui vient l'envie de profiter du soleil et des activités de plein air. Si vous êtes dans la région Rhône-Alpes, vous ne manquerez pas de choix pour vous divertir. Dans cet article, nous allons vous présenter les principales activités à faire pendant l'été dans cette région française.

Randonnée pédestre
La région Rhône-Alpes est connue pour ses paysages magnifiques, ses montagnes majestueuses et ses nombreux sentiers de randonnée pédestre. Que vous soyez débutant ou confirmé, vous trouverez des itinéraires adaptés à votre niveau. Le Parc Naturel Régional du Vercors offre notamment des parcours exceptionnels.

Activités nautiques
Les lacs et les rivières sont nombreux en Rhône-Alpes, offrant ainsi une large gamme d'activités nautiques telles que le canoë, le kayak, le paddle, la baignade ou la voile. Les lacs d'Annecy et du Bourget sont particulièrement populaires pour la pratique de ces sports.

Vélo
La région Rhône-Alpes est également un paradis pour les amateurs de vélo. Les montagnes de l'Isère, de la Savoie ou encore de la Haute-Savoie offrent des parcours variés et des paysages à couper le souffle. Les célèbres cols du Tour de France tels que le Col de la Madeleine, le Col du Galibier ou encore l'Alpe d'Huez sont également des incontournables pour les cyclistes.

Visites culturelles
Si vous cherchez à découvrir la richesse culturelle de la région, Rhône-Alpes ne vous décevra pas. Vous pourrez visiter de nombreux sites historiques tels que le Château de Versailles, le Musée de Grenoble, le Musée des Confluences à Lyon ou encore le Palais Idéal du Facteur Cheval à Hauterives.

Festivals
L'été est également la saison des festivals en Rhône-Alpes. De nombreux événements culturels ont lieu dans la région, tels que le Festival d'Avignon, le Festival Jazz à Vienne ou encore le Festival des Nuits de Fourvière à Lyon. Ces festivals offrent des concerts, des spectacles de danse, de théâtre et bien plus encore.", "La région Rhône-Alpes, située dans le sud-est de la France, est célèbre pour ses montagnes majestueuses, ses paysages pittoresques et ses villes historiques. Mais elle est également connue pour sa cuisine riche et variée, avec une grande variété de plats traditionnels et de restaurants de renommée mondiale. Voici donc quelques-uns des principaux restaurants de la région Rhône-Alpes à découvrir.

La Mère Brazier
Situé à Lyon, La Mère Brazier est l'un des restaurants les plus renommés de la région Rhône-Alpes. Ouvert en 1921, il a été tenu par la célèbre chef Eugénie Brazier, la première femme à avoir remporté six étoiles Michelin pour ses deux restaurants. Aujourd'hui, le restaurant continue de servir une cuisine traditionnelle de qualité supérieure, notamment des plats comme le poulet de Bresse à la crème et le soufflé au fromage.

Le Bistrot de l'Ecole des Pères
Situé à Tournon-sur-Rhône, ce bistrot a été fondé par le célèbre chef Michel Chapoutier, dont les vins sont également très appréciés dans la région. Le restaurant propose une cuisine française traditionnelle à base de produits locaux frais et de saison, ainsi qu'une sélection de vins de la région.", "La région Rhône-Alpes est un endroit incroyable pour les amoureux de la nature et les passionnés de sports d'hiver. C'est une région où l'on peut trouver une grande variété d'hôtels de qualité, qu'il s'agisse de chalets traditionnels ou de complexes hôteliers modernes. Dans cet article de blog, nous allons passer en revue quelques-uns des meilleurs hôtels de la région Rhône-Alpes.

Le Chalet Zannier - Megève
Le Chalet Zannier est un hôtel de luxe situé à Megève, une station de ski réputée dans les Alpes françaises. L'hôtel propose un service de qualité, des chambres confortables et un spa de classe mondiale. Le Chalet Zannier est l'endroit idéal pour les voyageurs à la recherche de tranquillité et de sérénité.

L'Alpaga - Megève
L'Alpaga est un autre hôtel de luxe situé à Megève. Il offre des vues spectaculaires sur les montagnes environnantes et propose une variété d'installations, notamment un spa, une piscine et un restaurant étoilé au Michelin. L'Alpaga est une destination idéale pour les voyageurs à la recherche d'un séjour de luxe à la montagne.", "La région Rhône-Alpes est une région magnifique, avec ses montagnes majestueuses, ses lacs cristallins et ses villes historiques. Cependant, pour les voyageurs et les habitants de la région, la qualité de la couverture wifi et 4G peut être un point d'inquiétude. Dans cet article de blog, nous allons explorer la situation actuelle de la couverture wifi et 4G dans la région Rhône-Alpes.

La couverture wifi dans la région Rhône-Alpes

En ce qui concerne la couverture wifi, la région Rhône-Alpes est plutôt bien desservie. La plupart des villes et des villages ont un accès wifi gratuit dans les lieux publics tels que les bibliothèques, les parcs et les places. Les grandes villes comme Lyon, Grenoble et Saint-Étienne offrent également une bonne couverture wifi dans les transports en commun, les hôtels et les restaurants.", "La région Rhône-Alpes est l'une des destinations les plus prisées pour les sports d'hiver en France, offrant des paysages époustouflants et des domaines skiables exceptionnels. Cependant, louer des skis peut être une dépense considérable pour les vacanciers. Dans cet article, nous examinerons les prix de location de ski dans la région Rhône-Alpes, afin de vous aider à trouver les meilleures offres.

Tout d'abord, il est important de noter que les prix de location de ski varient considérablement selon la station de ski. Les stations les plus prestigieuses et les plus populaires peuvent facturer des tarifs plus élevés, tandis que les stations plus petites et moins connues peuvent proposer des prix plus abordables.

En moyenne, le coût de la location de skis pour une semaine complète dans la région Rhône-Alpes varie entre 80 et 150 euros pour des skis de niveau débutant à intermédiaire. Les prix peuvent être plus élevés pour les skis de niveau avancé ou pour les modèles plus récents.", "La région Rhône-Alpes est une véritable terre d'accueil pour les amateurs de ski. Avec ses nombreuses stations de ski et ses domaines skiables étendus, la région offre un terrain de jeu idéal pour les skieurs de tous niveaux. Mais qu'en est-il des marques de ski présentes dans la région Rhône-Alpes ?

Dans cet article de blog, nous allons passer en revue certaines des marques de ski les plus populaires présentes dans la région Rhône-Alpes, ainsi que leurs caractéristiques et leurs particularités.

Rossignol
Rossignol est une marque de ski française qui a vu le jour en 1907. Elle est l'une des marques de ski les plus connues et les plus appréciées dans le monde entier. La marque a son siège à Voiron, en Isère, une ville située dans la région Rhône-Alpes.

Rossignol est connue pour sa gamme de skis performants et de haute qualité, adaptés à tous les types de skieurs, du débutant au skieur expérimenté. La marque propose également des équipements et des vêtements de ski, ainsi que des accessoires pour les sports d'hiver.

Salomon
Salomon est une marque de ski française, créée en 1947 à Annecy, en Haute-Savoie, une région de la région Rhône-Alpes. La marque est aujourd'hui l'une des marques de ski les plus importantes et les plus reconnues dans le monde.

Salomon est célèbre pour ses skis de haute qualité, ainsi que pour ses chaussures et ses fixations de ski. La marque est également connue pour ses équipements de randonnée et de ski de fond, ainsi que pour ses vêtements de ski.

Dynastar
Dynastar est une marque de ski française créée en 1963 à Sallanches, en Haute-Savoie, une autre région de la région Rhône-Alpes. La marque est réputée pour ses skis de haute performance, adaptés aux skieurs les plus exigeants.

Dynastar propose également une large gamme d'équipements et d'accessoires pour les sports d'hiver, tels que des chaussures de ski, des bâtons de ski et des sacs de transport.

Fischer
Fischer est une marque de ski autrichienne qui a été fondée en 1924. La marque est connue pour ses skis de haute qualité et pour son engagement en faveur du développement durable.

Fischer propose une large gamme de skis, allant des modèles pour débutants aux skis de course de haute performance. La marque propose également des chaussures de ski, des fixations et des accessoires pour les sports d'hiver.

En conclusion, la région Rhône-Alpes est l'un des meilleurs endroits au monde pour les amateurs de ski, et elle abrite certaines des marques de ski les plus importantes et les plus reconnues au monde. Que vous soyez débutant ou skieur expérimenté, vous trouverez forcément une marque de ski qui convient à vos besoins et à vos préférences dans la région.", "L'affluence de personnes lors des périodes de ski dans la région Rhône-Alpes

La région Rhône-Alpes est une destination de choix pour les amateurs de ski et de sports d'hiver en France. La région possède des stations de ski de renommée mondiale telles que Val d'Isère, Courchevel, Les Deux Alpes et bien d'autres encore. Cependant, avec une popularité croissante, vient une affluence de personnes considérable lors des périodes de ski.

L'afflux de visiteurs dans les stations de ski de la région Rhône-Alpes peut poser plusieurs défis pour les skieurs, les habitants et les entreprises locales. Les stations de ski doivent gérer un grand nombre de skieurs en même temps, ce qui peut entraîner des files d'attente importantes pour les remontées mécaniques et des pistes surpeuplées. Les habitants des villes et des villages avoisinants peuvent également être affectés par le trafic accru et le bruit.", "La région Rhône-Alpes est connue pour ses stations de ski renommées et ses paysages montagneux à couper le souffle. La qualité de la neige est donc un élément crucial pour l'industrie du tourisme dans la région. Au fil des ans, la qualité de la neige a connu des fluctuations importantes, avec des conséquences sur l'expérience des skieurs, la fréquentation des stations de ski et l'économie locale.

Dans les années 1970, la neige était souvent considérée comme de qualité médiocre en raison de l'absence de canons à neige. Les skieurs devaient souvent faire face à des pistes rocheuses et des zones dépourvues de neige. Cela a eu un impact sur la fréquentation des stations de ski, avec une baisse significative du nombre de skieurs.

Cependant, avec l'avènement des canons à neige dans les années 1980, la qualité de la neige a considérablement augmenté. Les canons à neige ont permis de produire de la neige artificielle en quantité suffisante pour couvrir les pistes et les zones les plus fréquentées. La qualité de la neige artificielle s'est également améliorée avec le temps, les nouveaux systèmes de production étant plus efficaces et moins consommateurs d'eau.

Au cours des dernières décennies, la qualité de la neige a toutefois été affectée par le changement climatique. Les températures plus chaudes ont entraîné une diminution de la quantité de neige naturelle, ce qui a eu un impact sur l'industrie du tourisme et l'économie locale. Les canons à neige ont donc joué un rôle important en permettant de produire de la neige artificielle en quantité suffisante pour maintenir une activité touristique importante dans la région.

Cependant, l'utilisation de canons à neige n'est pas sans conséquences sur l'environnement. Les canons à neige consomment une grande quantité d'eau, qui doit être prélevée dans les rivières ou les lacs de la région. L'utilisation de canons à neige peut également avoir des conséquences sur la biodiversité locale en perturbant les écosystèmes naturels.

En réponse à ces défis, les stations de ski de la région Rhône-Alpes ont commencé à développer des pratiques plus durables pour maintenir une activité touristique durable dans la région.", "La région Rhône-Alpes est une destination très prisée pour les sports d'hiver, notamment pendant les périodes d'affluence telles que les vacances de Noël, les vacances d'hiver et les week-ends prolongés. Cependant, la météo peut parfois jouer un rôle important dans la réussite de vos vacances de ski. Dans cet article de blog, nous allons examiner la météo pendant les périodes d'affluence dans la région Rhône-Alpes et ce que cela signifie pour les skieurs.

Les périodes d'affluence dans la région Rhône-Alpes

Les périodes d'affluence dans la région Rhône-Alpes se produisent principalement pendant les vacances scolaires françaises, c'est-à-dire pendant les vacances de Noël, les vacances d'hiver et les week-ends prolongés. Pendant ces périodes, les stations de ski sont généralement très fréquentées, avec de nombreux skieurs qui se rendent sur les pistes pour profiter des sports d'hiver.

La météo pendant les périodes d'affluence

La météo est un facteur important à prendre en compte lors de la planification de vos vacances de ski dans la région Rhône-Alpes, en particulier pendant les périodes d'affluence. Les conditions météorologiques peuvent affecter les pistes de ski, la visibilité et même la sécurité des skieurs.

Pendant les périodes d'affluence, la météo peut être imprévisible. Les chutes de neige peuvent causer des retards sur les routes, des fermetures de pistes et même des fermetures de stations de ski. La météo peut également avoir un impact sur la qualité de la neige. Des températures chaudes peuvent provoquer la fonte de la neige et rendre les pistes plus difficiles à skier.

Comment se préparer pour la météo

Pour éviter les mauvaises surprises météorologiques pendant vos vacances de ski dans la région Rhône-Alpes, il est important de se tenir informé des prévisions météorologiques avant de partir. Les sites web et les applications météo peuvent fournir des informations précises sur les conditions météorologiques actuelles et prévues.

Il est également important de se préparer en conséquence pour la météo. Apportez des vêtements chauds et imperméables, ainsi que des équipements de ski adaptés aux conditions météorologiques. Si vous prévoyez de skier par temps de neige ou de vent fort, assurez-vous d'avoir des lunettes de ski pour protéger vos yeux.

En conclusion, la météo peut être un facteur important à prendre en compte pendant les périodes d'affluence dans la région Rhône-Alpes. Il est important de se tenir informé des prévisions météorologiques avant de partir et de se préparer en conséquence pour la météo. Avec une bonne planification et une préparation adéquate, vous pourrez profiter pleinement de vos vacances de ski dans la région Rhône-Alpes, quelles que soient les conditions météorologiques."];
        $urlinfolist = ["https://i.familiscope.fr/1400x787/smart/2022/05/12/auvergne-alpes.jpg", "https://www.lyonresto.com/contenu/bandeau/rhone_alpes.jpg", "https://media-cdn.tripadvisor.com/media/photo-s/1a/e6/8f/e7/grand-hotel-des-alpes.jpg", "https://www.insee.fr/fr/statistiques/graphique/4309055/ar_ina_98_Figure_2.png", "https://www.belambra.fr/les-echappees/wp-inside/uploads/2017/01/sejour-au-ski-moins-cher-astuces-pour-des-vacances-petits-prix1.jpg", "https://skipass.fr/p/news/142228/default-142228-skis-2017-les-petites-marques-17f10-1.jpg", "https://cdn-s-www.ledauphine.com/images/C72B2E27-2B4C-4F32-B34E-C947E611CA9A/NW_raw/affluence-ce-lundi-matin-devant-l-esf-au-depart-des-cours-du-flocon-a-la-3-e-etoile-photo-le-dl-chantal-farfallini-1644255826.jpg", "https://france3-regions.francetvinfo.fr/image/fllYKHK9yl1CfPNPYcwmILxX9dk/1200x1200/regions/2020/06/09/5edf4933e2971_maxbestof053037-3492185.jpg", "https://www.meteocity.com/images/cache/seo/images/download/blocks/grillot-edouard-cikagnems7q-unsplash-5f33f7225bf12682834744.jpg"];


        $stationRepo = $manager->getRepository(Station::class);
        $allstation = $stationRepo->findAll();

        for ($i = 1; $i <= 9; $i++) {
            $randKey = rand(0, count($allstation) - 1);

            $info = new Information();

            $info->setStation($allstation[$randKey]);
            $info->setTitle($titleinfolist[$i-1]);
            $info->setDescription($descinfolist[$i-1]);
            $info->setImage($urlinfolist[$i-1]);

            $manager->persist($info);
        }
        $manager->flush();
    }
}
