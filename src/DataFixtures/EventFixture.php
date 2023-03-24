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

        $eventDesc = [
            "Bienvenue à notre événement atelier dégustation dans notre magnifique station de ski ! Nous sommes ravis de vous offrir une expérience unique qui vous permettra de découvrir les saveurs les plus délicieuses de notre région, tout en profitant de la beauté des montagnes enneigées.
Au cours de cet atelier, vous aurez la chance de goûter à une variété de spécialités locales, sélectionnées spécialement pour vous par nos chefs talentueux. De la fondue au fromage aux plats de montagne traditionnels, en passant par les vins régionaux, vous découvrirez des saveurs authentiques qui vous feront tomber amoureux de la cuisine montagnarde.
Notre chalet confortable et chaleureux est l'endroit parfait pour se détendre et se réchauffer après une journée de ski. Vous pourrez vous asseoir près de la cheminée, vous détendre et profiter de la vue panoramique sur les montagnes enneigées tout en discutant avec vos amis et en savourant les plats délicieux.
Nous sommes impatients de vous accueillir à notre événement atelier dégustation et de partager avec vous notre passion pour la cuisine montagnarde. Venez vivre une expérience unique et inoubliable dans notre station de ski et laissez-vous séduire par le charme de la montagne !",

            "Bienvenue dans notre station de ski pour l'événement Redbull qui promet de vous offrir une expérience de ski unique et excitante ! Nous sommes ravis de collaborer avec Redbull pour organiser cet événement inoubliable qui célèbre la passion pour la glisse et l'adrénaline.
Au cours de cet événement, vous pourrez voir certains des meilleurs skieurs freestyle du monde en action, qui défieront les lois de la gravité avec des sauts époustouflants et des figures spectaculaires. Vous serez émerveillé par la créativité et le courage de ces athlètes de renommée mondiale qui repoussent les limites de ce que nous pensons possible sur les pistes.
Mais cet événement ne se limite pas à regarder les pros ! Vous pouvez également participer à des compétitions, des courses et des défis de ski pour tester vos propres compétences et défier vos amis. Les activités sont adaptées à tous les niveaux de ski, du débutant au plus avancé, afin que tout le monde puisse participer et s'amuser.
Enfin, l'ambiance festive créée par Redbull ne manquera pas de vous faire vibrer avec des animations, de la musique et de l'énergie à revendre. Avec Redbull et notre station de ski, vous aurez l'opportunité de vivre une expérience de ski inoubliable que vous n'oublierez jamais.
Nous sommes impatients de vous accueillir à notre station de ski pour cet événement Redbull et de vous faire découvrir le meilleur du ski freestyle et de l'adrénaline. Venez vivre l'expérience et créer des souvenirs incroyables avec nous !",

            "Bienvenue dans notre station de ski pour notre événement Esport qui promet de vous offrir une expérience de jeu unique et passionnante ! Nous sommes ravis de collaborer avec des organisations de Esport pour organiser cet événement inoubliable qui célèbre la compétition et la camaraderie.
Au cours de cet événement, vous aurez la chance de participer à des compétitions de jeux en ligne avec des joueurs du monde entier. Vous pourrez affronter des adversaires de taille dans des tournois passionnants et testez vos compétences dans vos jeux préférés.
Mais cet événement ne se limite pas à jouer à des jeux en ligne ! Vous pourrez également participer à des activités ludiques et en plein air comme des courses de ski, des randonnées en raquettes et des défis de ski pour vous permettre de vous déconnecter du monde virtuel et profiter du charme de la montagne.
Enfin, l'ambiance festive créée par les événements Esport ne manquera pas de vous faire vibrer avec des animations, de la musique et de l'énergie à revendre. Vous pourrez rencontrer des joueurs et des fans de Esport venant de différents pays pour échanger sur vos passions communes.
Avec notre station de ski et l'événement Esport, vous aurez l'opportunité de vivre une expérience unique qui allie passion pour les jeux en ligne et amour de la montagne. Nous sommes impatients de vous accueillir et de vous faire vivre une expérience de jeu inoubliable que vous n'oublierez jamais.
Venez vous joindre à nous pour cet événement incroyable et profitez de l'atmosphère électrique de l'Esport et de la beauté de la montagne !",

            "Bienvenue dans notre station de ski pour une expérience de ski inoubliable : la visite du domaine en hélicoptère ! Nous sommes ravis de vous offrir cette opportunité de découvrir les montagnes sous un angle différent, à bord d'un hélicoptère privé.
Au cours de cette visite, vous survolerez les paysages majestueux des Alpes, avec des vues à couper le souffle sur les sommets enneigés, les glaciers scintillants et les forêts de conifères. Vous pourrez admirer des points de vue inaccessibles autrement et explorer les recoins cachés de notre domaine skiable.
En plus des vues spectaculaires, vous aurez également la chance de skier sur des pistes exclusives réservées aux clients de la visite en hélicoptère. Ces pistes offrent des descentes excitantes et uniques, avec des conditions de neige exceptionnelles, pour une expérience de ski hors du commun.
Notre équipe professionnelle vous garantit un vol en toute sécurité et un service de qualité. Vous serez accompagné d'un guide expérimenté qui vous fera découvrir les secrets de la région et vous fournira toutes les informations nécessaires pour rendre cette expérience inoubliable.
La visite du domaine en hélicoptère est l'une des activités les plus exclusives que nous proposons, offrant une expérience de ski de luxe et une vue à couper le souffle sur les montagnes. Venez rejoindre notre équipe pour cette expérience unique et vivre des moments magiques que vous n'oublierez jamais.
Réservez dès maintenant pour découvrir l'excitation de la visite du domaine en hélicoptère et profiter de cette occasion unique de découvrir la beauté des Alpes en toute intimité.",

            "Bienvenue dans notre station de ski pour notre événement 'Soirée autour du feu' ! Nous sommes ravis de vous offrir cette occasion de vous réchauffer et de vous détendre après une journée de ski.
Au cours de cette soirée, vous pourrez profiter d'une ambiance chaleureuse et conviviale autour d'un grand feu de camp. Nous vous fournirons des couvertures confortables pour vous envelopper, tandis que vous pourrez déguster des boissons chaudes et des collations pour vous ravitailler après une journée d'efforts.
La soirée sera accompagnée d'une musique douce et d'un éclairage tamisé pour créer une atmosphère intime et relaxante. Vous pourrez partager des histoires et des anecdotes avec les autres invités, ou simplement profiter du calme et de la tranquillité de la nuit.
Nous proposerons également des activités amusantes pour ceux qui souhaitent s'amuser, comme des jeux de société ou des contes autour du feu. Cette soirée est l'occasion idéale pour se détendre, passer du temps avec des amis et des proches, et se connecter à la nature.
La soirée autour du feu est l'un de nos événements les plus populaires, offrant une expérience unique et authentique de la montagne. Venez nous rejoindre pour une soirée inoubliable, et profitez de la beauté de la montagne sous les étoiles et de l'atmosphère chaleureuse créée par le feu de camp.
Réservez dès maintenant pour cette soirée relaxante et conviviale, et vivez une expérience de ski qui va bien au-delà des pistes enneigées.",

            "Bienvenue dans notre station de ski pour notre exposition de sculptures de glace ! Nous sommes fiers de vous présenter cet événement unique en son genre, qui vous permettra de découvrir les merveilles de la sculpture sur glace.
Au cours de l'exposition, vous pourrez admirer des œuvres d'art impressionnantes réalisées par des artistes professionnels, qui ont travaillé dur pour créer des sculptures spectaculaires à partir de blocs de glace. Vous serez émerveillé par les détails subtils de chaque sculpture, qui sont mis en valeur par la beauté naturelle de la glace.
Nous proposerons également des activités pour les enfants, comme des ateliers de sculpture de glace, pour leur permettre de s'essayer à cet art fascinant. Les participants auront la chance de travailler avec des outils spéciaux et de créer leur propre sculpture sur glace, sous la supervision d'experts.
L'exposition sera accompagnée d'une musique douce et d'un éclairage spécialement conçu pour mettre en valeur chaque sculpture. Vous pourrez déguster des boissons chaudes et des collations tout en admirant les œuvres, pour une expérience immersive complète.
L'exposition de sculptures de glace est l'un de nos événements les plus populaires, offrant une expérience unique et authentique de la montagne. Venez nous rejoindre pour découvrir l'art de la sculpture sur glace, admirer des œuvres spectaculaires et profiter de l'ambiance chaleureuse de notre station de ski.
Réservez dès maintenant pour cette exposition fascinante, et vivez une expérience de ski qui va bien au-delà des pistes enneigées.",

            "Bienvenue dans notre station de ski pour notre événement 'Initiation à la sculpture sur glace' ! Nous sommes heureux de vous offrir cette opportunité unique de découvrir le monde de la sculpture sur glace et d'apprendre les techniques de base auprès d'experts.
Au cours de l'événement, vous apprendrez les bases de la sculpture sur glace en travaillant avec des blocs de glace spécialement préparés pour l'occasion. Vous serez guidé par des professionnels qui vous montreront les outils et les techniques pour créer votre propre sculpture sur glace. Vous aurez la possibilité de travailler en solo ou en équipe, pour vous amuser et apprendre avec d'autres participants.
L'événement sera accompagné d'une musique douce et d'un éclairage spécialement conçu pour créer une ambiance chaleureuse et intime. Vous pourrez déguster des boissons chaudes et des collations pour vous ravitailler pendant que vous apprenez.
L'initiation à la sculpture sur glace est l'un de nos événements les plus populaires, offrant une expérience unique et passionnante pour tous les âges. C'est l'occasion idéale de découvrir un art fascinant et de passer un moment convivial en famille ou entre amis.
Réservez dès maintenant pour cette initiation à la sculpture sur glace, et vivez une expérience de ski qui va bien au-delà des pistes enneigées.",

            "Bienvenue dans notre station de ski pour notre événement 'Bal de soirée' ! Nous sommes fiers de vous offrir cette soirée spéciale, qui vous permettra de danser, de socialiser et de profiter de l'ambiance animée de notre station de ski.
La soirée commencera par un cocktail d'accueil, où vous pourrez rencontrer d'autres participants et vous mettre dans l'ambiance. Ensuite, vous pourrez profiter d'un dîner gastronomique, préparé par notre chef renommé, qui vous fera découvrir des saveurs locales et internationales.
Après le dîner, la piste de danse s'ouvrira avec un DJ professionnel qui vous fera danser toute la nuit avec une sélection de musique variée et entraînante. Vous pourrez également profiter de spectacles de danse et d'animations pour agrémenter la soirée.
Le bal de soirée est l'un de nos événements les plus appréciés, offrant une occasion unique de rencontrer de nouvelles personnes et de passer une soirée inoubliable dans un cadre enchanteur. Que vous soyez débutant ou danseur expérimenté, vous trouverez quelque chose pour vous amuser.
Réservez dès maintenant pour cette soirée de bal inoubliable, et vivez une expérience de ski qui va bien au-delà des pistes enneigées.",

            "Bienvenue dans notre station de ski pour notre événement 'Création d'igloo' ! Nous sommes ravis de vous offrir cette expérience unique qui vous permettra de découvrir la tradition de la construction d'igloo, une activité emblématique des régions enneigées.
    Au cours de l'événement, vous serez guidé par des experts qui vous montreront les techniques de construction d'un igloo en neige. Vous apprendrez comment utiliser des outils spécifiques pour sculpter et assembler les blocs de neige et comment créer une structure solide et confortable à l'intérieur.
L'événement se déroulera dans un cadre magnifique, entouré par des paysages époustouflants et une ambiance chaleureuse. Vous pourrez travailler en équipe pour construire votre igloo ou en solo pour relever un défi personnel.
    L'expérience de la création d'igloo est une activité amusante et éducative pour les adultes et les enfants. C'est une occasion idéale pour les familles et les groupes d'amis de se réunir et de créer des souvenirs inoubliables ensemble.
    Réservez dès maintenant pour cette expérience unique de création d'igloo et découvrez l'une des traditions les plus fascinantes des régions enneigées. C'est l'occasion idéale pour vivre une expérience de ski qui va bien au-delà des pistes enneigées.",

            "Bienvenue dans notre station de ski pour notre événement 'Cours/Stage biathlon' ! Nous sommes ravis de vous offrir cette opportunité unique de découvrir et de pratiquer le biathlon, un sport qui combine ski de fond et tir à la carabine.
Pendant l'événement, vous apprendrez les techniques de ski de fond et de tir à la carabine sous la supervision d'instructeurs qualifiés et expérimentés. Vous pourrez également découvrir l'histoire et les règles de ce sport olympique passionnant.
Nos stages biathlon sont conçus pour tous les niveaux, des débutants aux athlètes confirmés. Vous pourrez choisir entre des cours individuels ou en groupe, et nos instructeurs adapteront leur enseignement en fonction de vos besoins et de vos objectifs.
L'événement se déroulera dans un cadre magnifique, entouré par des paysages époustouflants et une ambiance chaleureuse. Vous pourrez profiter des pistes de ski de fond et des cibles de tir professionnelles pour pratiquer votre technique et améliorer vos performances.
Le cours/stage biathlon est une activité stimulante et passionnante pour tous les âges. C'est une occasion idéale pour les familles et les groupes d'amis de se réunir et de partager une expérience unique.
Réservez dès maintenant pour ce stage biathlon passionnant et découvrez l'un des sports les plus passionnants des régions enneigées. C'est l'occasion idéale pour vivre une expérience de ski qui va bien au-delà des pistes enneigées.",

            "Bienvenue dans notre station de ski pour notre événement 'Saut à ski' ! Nous sommes ravis de vous offrir cette opportunité unique de découvrir et de pratiquer l'un des sports les plus passionnants de l'hiver.
Pendant l'événement, vous pourrez apprendre les techniques de saut à ski auprès de nos instructeurs qualifiés et expérimentés. Vous découvrirez l'histoire de ce sport incroyablement spectaculaire et vous pourrez vous essayer à différents types de sauts, en fonction de votre niveau et de votre expérience.
Nos stages de saut à ski sont conçus pour tous les niveaux, des débutants aux athlètes confirmés. Vous pourrez choisir entre des cours individuels ou en groupe, et nos instructeurs adapteront leur enseignement en fonction de vos besoins et de vos objectifs.
L'événement se déroulera dans un cadre magnifique, entouré par des paysages époustouflants et une ambiance chaleureuse. Vous pourrez profiter des pistes de saut à ski professionnelles pour pratiquer votre technique et améliorer vos performances.
Le saut à ski est une activité stimulante et passionnante pour tous les âges. C'est une occasion idéale pour les familles et les groupes d'amis de se réunir et de partager une expérience unique.
Réservez dès maintenant pour ce stage de saut à ski passionnant et découvrez l'un des sports les plus spectaculaires des régions enneigées. C'est l'occasion idéale pour vivre une expérience de ski qui va bien au-delà des pistes enneigées.",

            "Bienvenue dans notre station de ski pour notre compétition professionnelle de ski ! Nous sommes ravis de vous offrir l'opportunité de voir les meilleurs skieurs professionnels du monde s'affronter sur nos pistes de renommée mondiale.
Lors de cet événement, vous aurez la chance de voir en direct les plus grands noms du ski compétitionner dans différentes épreuves, telles que la descente, le slalom géant, le slalom spécial et le super-G. Vous serez captivé par l'habileté et la vitesse de ces athlètes exceptionnels qui repoussent les limites de leur sport.
Vous pourrez profiter d'une ambiance électrique et festive tout au long de l'événement, avec des animations, des concerts, des stands de nourriture et de boissons, ainsi que des activités pour les enfants. Vous pourrez également assister à des séances d'autographes et rencontrer vos skieurs préférés.
Notre station de ski offre un cadre exceptionnel pour cet événement. Vous serez entouré par des montagnes majestueuses et des pistes bien préparées pour une expérience de ski inoubliable.
Rejoignez-nous pour cette compétition professionnelle de ski excitante et vivez une expérience unique et mémorable dans notre station de ski. C'est l'occasion idéale de voir en direct les meilleurs skieurs du monde et de découvrir les joies du ski en compétition. Réservez dès maintenant pour un moment de ski inoubliable.",

            "Bienvenue dans notre événement de cani-rando ! Profitez de l'air frais et des paysages incroyables des montagnes tout en explorant les sentiers avec votre fidèle compagnon à quatre pattes.
Notre événement de cani-rando est ouvert à tous les niveaux, des débutants aux plus expérimentés. Les chiens sont fournis et entrainés pour vous accompagner tout au long de votre randonnée. Vous pourrez ainsi vous concentrer sur l'exploration et la découverte de la beauté de la montagne.
Nos guides professionnels vous accompagneront tout au long de la randonnée et vous donneront des conseils pour que vous puissiez profiter de l'expérience en toute sécurité. Vous aurez également l'opportunité de découvrir la culture locale et d'apprendre davantage sur l'histoire de notre région.
Rejoignez-nous pour une expérience inoubliable de cani-rando à [nom de la station de ski]. Nous sommes impatients de vous accueillir !",

            "Bienvenue pour notre événement de visite guidée en randonnée ! Partez à la découverte de nos montagnes enneigées avec un guide local expert qui vous emmènera à travers les sentiers les plus pittoresques de notre région.
Que vous soyez débutant ou randonneur expérimenté, cette visite guidée est ouverte à tous les niveaux. Vous aurez l'opportunité de découvrir la nature sauvage, la faune et la flore de notre région tout en admirant des vues panoramiques spectaculaires. Notre guide partagera avec vous des anecdotes sur la région, l'histoire et la culture locale, pour une expérience immersive et enrichissante.
Nous proposons des randonnées de différentes durées et niveaux, pour s'adapter à vos envies et besoins. Qu'il s'agisse d'une courte balade en famille ou d'une randonnée plus intense, nos guides professionnels s'assureront que vous êtes en sécurité tout au long de l'expérience.
Rejoignez-nous pour une visite guidée en randonnée inoubliable à [nom de la station de ski] et explorez notre région de manière unique et authentique. Nous sommes impatients de vous accueillir !",

            "Bienvenue à la bataille de boules de neige ultime de notre station de ski! Préparez-vous à vous plonger dans une guerre de neige amusante et excitante qui vous laissera des souvenirs mémorables pour les années à venir.
Venez avec vos amis et votre famille pour participer à cette bataille de boules de neige épique. Nous fournirons tout ce dont vous avez besoin, y compris des boules de neige fraîches et des zones de bataille aménagées. Vous pourrez également profiter de nos stands de nourriture et de boissons chaudes pour vous réchauffer après avoir affronté les températures glaciales.
Nous aurons également des compétitions de lancer de boules de neige et des défis d'habileté pour les enfants et les adultes. Les gagnants recevront des prix incroyables et des souvenirs de leur expérience incroyable.
Ne manquez pas cette occasion unique de vous amuser dans la neige en famille ou entre amis. Rejoignez-nous pour une journée de plaisir et de jeux, et créez des souvenirs inoubliables dans notre station de ski.",

            "Bienvenue dans notre station de ski pour une journée d'aventure incroyable! Que vous soyez débutant ou confirmé, notre événement de ski, luge et snowboard est fait pour vous. Venez profiter de nos pistes enneigées et de notre panorama spectaculaire tout en découvrant les joies de ces sports d'hiver.
Notre équipe de professionnels qualifiés est là pour vous guider tout au long de la journée, que vous soyez à la recherche de sensations fortes ou simplement de moments de détente en famille. Nous proposons une grande variété de pistes adaptées à tous les niveaux, du débutant à l'expert, pour garantir une expérience de glisse inoubliable.
Et pour les plus aventureux, pourquoi ne pas essayer notre parcours de luge ? Avec des virages serrés et des pentes raides, c'est une expérience à ne pas manquer! Si vous préférez le snowboard, nos moniteurs seront ravis de vous enseigner les techniques de base et de vous aider à progresser dans ce sport passionnant.
Et après une journée bien remplie sur les pistes, rien de mieux qu'une pause bien méritée dans l'un de nos restaurants d'altitude, où vous pourrez vous réchauffer autour d'un bon repas et d'une boisson chaude.
Alors qu'attendez-vous ? Rejoignez-nous pour une journée de ski, luge et snowboard qui restera gravée dans votre mémoire !",

            "Bienvenue à notre événement de descente de piste nocturne ! Vous recherchez des sensations fortes et une expérience unique ? Alors, rejoignez-nous pour une soirée inoubliable sur les pistes de ski illuminées de notre station de ski.
Le soleil est couché, les étoiles brillent et les lumières scintillent sur les pistes. La neige fraîche vous attend pour une descente sensationnelle de notre piste éclairée. Équipez-vous de votre équipement de ski ou de snowboard, puis laissez notre personnel vous guider jusqu'au sommet de la montagne. La vue sur les montagnes enneigées est à couper le souffle et vous n'aurez qu'une envie : dévaler les pistes.
Une fois en haut, vous pourrez admirer la vue panoramique avant de vous lancer à toute vitesse vers le bas. Les lumières vous guideront tout au long de la descente et la sensation de glisser sur la neige fraîche sous les étoiles est indescriptible.
Après votre descente, rejoignez-nous pour une soirée de détente dans notre chalet. Nous avons prévu des rafraîchissements et de la nourriture pour que vous puissiez vous réchauffer et reprendre des forces. La musique et l'ambiance chaleureuse vous donneront envie de rester toute la nuit.
Venez vivre une expérience unique et magique avec notre événement de descente de piste nocturne !",

            "Bienvenue dans notre événement 'Visite de la faune locale' dans notre station de ski! Si vous cherchez une expérience unique et mémorable lors de votre séjour ici, nous avons exactement ce qu'il vous faut.
Notre visite de la faune locale est une occasion rare de découvrir les animaux qui peuplent nos montagnes. Accompagnés d'un guide expert et passionné, vous découvrirez la beauté de la nature environnante et en apprendrez davantage sur la faune locale.
Au cours de la visite, vous pourrez observer des animaux tels que des cerfs, des chamois, des renards et des écureuils, dans leur habitat naturel. Vous pourrez également en apprendre davantage sur leur comportement et leur mode de vie, ainsi que sur leur importance pour l'écosystème local.
Cette expérience est non seulement éducative, mais aussi très agréable. Vous aurez l'occasion de vous promener dans un cadre magnifique et de respirer l'air frais de la montagne tout en profitant des vues panoramiques.
Nous vous encourageons à réserver dès maintenant votre place pour cette visite de la faune locale. C'est une expérience inoubliable que vous n'oublierez jamais!"
        ];

        for ($a = 0; $a<=count($allEvent)-1; $a++){
            $date = new DateTime('2000-01-01');

            $event = new Event();

            $event->setTitle($allEvent[$a]);

            $event->setDescription($eventDesc[$a]);

            $event->setImage('https://www.detoursenfrance.fr/sites/art-de-vivre/files/det_val_disere-00018617_val_disere_tourisme.jpg');

            $event->setDate($date);

            $event->setStation($allstation[rand(0, count($allstation)-1)]);

            $manager->persist($event);
        }
        $manager->flush();
    }
}
