<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use App\Entity\Station;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BlogFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $titlebloglist = ["Tuto utilisation Ski", "Tuto utilisation Snow", "Tuto utilisation ski de fond", "Nos Produit régionaux"];
        $descbloglist = ["Si vous êtes nouveau dans le monde du ski, il est important de commencer par les bases pour vous assurer de partir du bon pied. Tout d'abord, assurez-vous de choisir les bons équipements, tels que des skis adaptés à votre niveau et votre taille, des chaussures confortables et ajustées, des bâtons adaptés, ainsi qu'un casque et des lunettes pour protéger vos yeux et votre tête. Une fois que vous êtes équipé, prenez le temps de bien comprendre les règles de sécurité sur les pistes, notamment en restant sur les pistes balisées et en évitant les zones hors-piste. Lorsque vous commencez à skier, commencez par des pentes faciles et apprenez à maîtriser les techniques de base, comme le virage en chasse-neige, qui consiste à faire un V avec vos skis pour ralentir ou tourner. N'oubliez pas de garder une posture stable, en gardant vos genoux légèrement fléchis et en gardant votre poids centré sur vos skis. Enfin, prenez le temps de pratiquer et de vous familiariser avec les sensations de glisse, tout en restant à l'aise et en évitant de prendre des risques inutiles.", "Le snowboard est un sport passionnant et amusant qui peut être pratiqué par tout le monde, y compris les débutants. Si vous êtes intéressé par le snowboard et que vous voulez en savoir plus sur comment vous y prendre, vous êtes au bon endroit. Dans cet article, nous allons vous donner quelques conseils pour vous aider à apprendre à faire du snowboard en tant que débutant.

Tout d'abord, il est important de bien se préparer avant de se lancer dans le snowboard. Cela signifie que vous devrez vous équiper de vêtements appropriés, notamment une veste chaude, un pantalon de ski, des gants, un bonnet et des lunettes de soleil ou des lunettes de ski. Il est également essentiel de porter un casque pour vous protéger la tête en cas de chute.

Ensuite, vous devrez choisir une station de ski qui convient aux débutants. Il est préférable de commencer sur des pentes douces et larges, avec des remontées mécaniques faciles d'accès. Les écoles de ski ou les moniteurs de snowboard peuvent également vous aider à apprendre les bases du snowboard, tels que la position de base, la manière de s'arrêter et de tourner.

La position de base en snowboard consiste à se tenir debout sur la planche avec les pieds écartés de la largeur des épaules, les genoux légèrement fléchis et les bras tendus vers l'avant pour maintenir l'équilibre. Pour s'arrêter, il suffit de pencher le poids du corps sur le talon ou l'orteil, selon le sens dans lequel on veut tourner. Pour tourner, il faut simplement tourner les épaules et les hanches dans la direction souhaitée.

Il est important de commencer par des pentes faciles et d'augmenter progressivement la difficulté. Il est également recommandé de pratiquer régulièrement pour améliorer sa technique et sa confiance en soi. Il est conseillé de ne pas se précipiter et de prendre le temps d'apprendre à son propre rythme.

Enfin, il est important de se rappeler que le snowboard peut être un sport dangereux et qu'il est donc essentiel de respecter les règles de sécurité. Il est important de rester conscient de son environnement, de ne pas prendre de risques inutiles et de ne pas se mettre en danger ou mettre les autres en danger.

En résumé, le snowboard est un sport amusant et passionnant pour les débutants, mais il nécessite une préparation et une pratique adéquates pour être pratiqué en toute sécurité. En suivant ces conseils de base, vous pourrez vous lancer sur les pistes et commencer à apprendre à faire du snowboard en toute confiance.", "Le ski de fond est un sport d'hiver populaire qui offre une excellente opportunité pour rester actif tout en profitant des paysages hivernaux. Si vous êtes débutant en ski de fond, vous pouvez trouver le processus d'apprentissage un peu intimidant, mais avec la bonne préparation et les conseils appropriés, vous pouvez devenir un skieur de fond compétent en peu de temps.

Voici quelques conseils pour vous aider à apprendre à skier de fond en tant que débutant :

Équipement : La première étape pour commencer le ski de fond est de vous procurer le bon équipement. Vous aurez besoin de skis de fond, de bâtons, de chaussures et de vêtements appropriés pour la pratique du ski de fond. Les skis de fond sont plus longs et plus étroits que les skis alpins, et sont conçus pour glisser sur la neige plutôt que pour descendre des pentes. Les chaussures doivent être confortables et offrir un soutien suffisant pour les chevilles. Les bâtons doivent être suffisamment longs pour atteindre les épaules.

Apprentissage des bases : Avant de vous lancer sur les pistes, il est important de comprendre les bases du ski de fond, y compris la technique de glisse, la propulsion et l'arrêt. La technique de glisse consiste à glisser les skis sur la neige avec des mouvements de balancement de gauche à droite. Pour se propulser, il faut pousser avec les bâtons tout en glissant sur les skis. Pour s'arrêter, il faut faire pivoter les skis en V.

Choisir les pistes appropriées : Les débutants devraient commencer par des pistes plates et faciles pour se familiariser avec le ski de fond. Les pistes de ski de fond sont généralement classées en fonction de leur difficulté, allant des pistes vertes (faciles) aux pistes noires (difficiles). Il est important de ne pas se surestimer et de choisir une piste adaptée à son niveau de compétence.

Entraînement régulier : Comme pour tout sport, la pratique régulière est essentielle pour améliorer ses compétences en ski de fond. En plus de pratiquer sur les pistes, vous pouvez également vous entraîner à la maison en faisant des exercices de conditionnement physique tels que des squats, des fentes et des sauts.", "Les Rhône-Alpes sont une région française connue pour sa gastronomie diversifiée et ses produits régionaux de qualité supérieure. Dans cet article de blog, nous allons explorer certains des produits régionaux gastronomiques les plus populaires de la région Rhône-Alpes.

Le Beaufort :
Le Beaufort est un fromage à pâte pressée non cuite, fabriqué dans les montagnes des Alpes. C'est l'un des fromages les plus anciens et les plus appréciés de la région Rhône-Alpes. Le Beaufort est un fromage à la saveur fruitée, légèrement salée et au goût subtil de noisette. Il est parfait pour la dégustation, la cuisine ou tout simplement pour une soirée de fromage et de vin.

Le Bleu du Vercors-Sassenage :
Le Bleu du Vercors-Sassenage est un fromage à pâte persillée, fabriqué à partir de lait de vache cru et entier. C'est un fromage artisanal, fabriqué dans les montagnes du Vercors depuis plus de 600 ans. Le Bleu du Vercors-Sassenage est caractérisé par sa texture crémeuse, son goût intense et légèrement salé, ainsi que ses veines bleues marbrées. Il est parfait pour les amateurs de fromage à la recherche d'un goût audacieux et riche."];
        $urlbloglist = ["https://ski-aventure.com/img/cms/category/equipement.jpeg","https://medias.lequipe.fr/img-photo-jpg/on-vous-explique-tout-pour-avoir-un-equipement-adapte-a-votre-pratique-du-snowboard-shutterstock/1500000001060161/144:70,1921:958-1200-600-75/1e4b5.jpg", "https://www.salomon.com/sites/default/files/styles/squared_600/public/content_hub/teaser_import/portrait__9746.jpg?itok=N-3sNdpi", "https://traveltop6.com/assets/media/_600xAUTO_crop_center-center_none/Cheese.jpg"];

        $stationRepo = $manager->getRepository(Station::class);
        $allstation = $stationRepo->findAll();

        for ($i = 1; $i <= 4; $i++) {
            $randKey = rand(0, count($allstation) - 1);

            $blog = new Blog();

            $blog->setStation($allstation[$randKey]);
            $blog->setTitle($titlebloglist[$i-1]);
            $blog->setDescription($descbloglist[$i-1]);
            $blog->setImage('blog.png');

            $manager->persist($blog);
        }
        $manager->flush();

    }
}
