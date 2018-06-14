<?php
/**
 * Created by PhpStorm.
 * User: wilder22
 * Date: 13/06/18
 * Time: 18:54
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Artwork;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ArtworkFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $artwork1 = new Artwork();
        $artwork1->setApproximativeDate(true);
        $artwork1->setCartel($this->getReference('cartel1'));
        $artwork1->setDate(1615);
        $artwork1->setTitle("L’Embarquement des animaux dans l’arche de Noé");
        $artwork1->setImage('/images/Brueghel1.jpg');
        $artwork1->setMuseum();
        $artwork1->setDescription("Ce tableau est l’une des versions d’une composition à succès peinte par Jan Brueghel le Jeune entre 1613 et 1615. Le peintre s’inspire d’une œuvre élaborée par son père. Jan Brueghel l’Ancien (dit Brueghel de Velours) vers 1610 et il n’est d’ailleurs pas interdit de voir dans le petit tableau d’Orléans une œuvre de collaboration entre le père et le fils. Le thème des animaux réunis par Noé dans l’arche à été traité à de nombreuses reprises par l’atelier des Brueghel. La version d’Orléans est elle-même connue par des répliques, attestant de sa grande popularité. 
        
Son sujet, emprunté à un chapitre de la Genèse, offre le prétexte à un déploiement presque encyclopédique d’espèces animales, européennes ou exotiques, domestiques ou sauvages, faisant de ces petits panneaux de cabinets autant de charmants bestiaires vivement colorés. Ce type de composition pouvait prendre place dans un cabinet de curiosité, où le collectionneur du XVIIᵉ siècle rassemblait objets scientifiques et naturalia, coquillages, animaux naturalisés, cornes, trophées de chasse, coraux, fossiles. Le peintre nous transporte dans les jours précédents le Déluge : Dieu à décidé de punir les hommes en noyant la Terre. Il demande à Noé et à sa famille de bâtir une arche afin d’abriter des couples d’animaux et ainsi repeupler la Terre après la décrue. Devant le spectateur, le peintre aligne une somme considérable d’espèces : lions, chiens, léopards, tortues, porcs épics, bœufs, éléphants, singes, dromadaires, divers rongeurs et de grandes volées d’oiseaux.  Un grand cheval blanc, isolé, servant de point d’appui à la composition, emprunte sa pose majestueuse à certains tableaux de Rubens, dont Brueghel était l’ami proche.");
        $manager->persist($artwork1);
        $this->addReference('artwork1', $artwork1);

        $artwork2 = new Artwork();
        $artwork2->setApproximativeDate(true);
        $artwork2->setCartel($this->getReference('cartel2'));
        $artwork2->setDate(1837);
        $artwork2->setTitle("Episode de la campagne d’Egypte – Bataille d’Héliopolis le 20 mars 1800");
        $artwork2->setImage('/images/Cogniet.jpg');
        $artwork2->setMuseum();
        $artwork2->setDescription("Léon Cogniet a largement contribué au musée d’Histoire de France fondé à Versailles par Louis-Philippe, avec notamment les commandes de La Bataille du Thabor (aujourd’hui déposé à Orléans) et La bataille d’Héliopolis, toujours à Versailles. 
Ce tableau reprend le même sujet dans un format plus réduit destiné au marché de l’art, particulièrement actif sous la Monarchie de Juillet. 
");
        $manager->persist($artwork2);
        $this->addReference('artwork2', $artwork2);

        $artwork3 = new Artwork();
        $artwork3->setApproximativeDate(true);
        $artwork3->setCartel($this->getReference('cartel3'));
        $artwork3->setDate(1824);
        $artwork3->setTitle("Tête de vielle femme");
        $artwork3->setImage('/images/vieille_femme.jpg');
        $artwork3->setMuseum();
        $artwork3->setDescription("En 1824, Delacroix expose au Salon Scène de massacres de Scio qui rend hommage à la résistance et au courage du peuple grec révolté contre la domination turque. Cette étude prépare la tête de vielle femme à droite de la composition. Léon Cogniet, rendant visite à Delacroix en mai 1824, lors de l’exécution de l’œuvre, admira beaucoup ce personnage qu’il rapprocha de toiles de leur ami commun, Géricault, récemment disparu.");
        $manager->persist($artwork3);
        $this->addReference('artwork3', $artwork3);

        $artwork4 = new Artwork();
        $artwork4->setApproximativeDate(true);
        $artwork4->setCartel($this->getReference('cartel4'));
        $artwork4->setDate(1519);
        $artwork4->setTitle("La Vierge à l’Enfant avec saint Jean Baptiste et saint Joseph");
        $artwork4->setImage('/images/le_correge.jpg');
        $artwork4->setMuseum();
        $artwork4->setDescription("Dès le XVIIᵉ siècle, alors que le tableau était au château de Versailles, Charles Le Brun (1619-1690) s’interrogeait sur son attribution, et son état de conservation était jugé critique. L’œuvre a été définitivement rendue à Corrège en 1921 par Roberto Longhi (1890-1970) et sa restauration récente, rendue indispensable par une altération des repeints et des vernis successifs, permet de retrouver une composition homogène, le style et la matière raffinée du peintre. 

Corrège est l’un des plus importants peintres de la deuxième Renaissances italiennes. Formé dans l’entourage d’Andrea Mantegna (1431-1506), il puise ensuite à la fois dans les leçons de Léonard (1452-1519) ou de Raphaël (1483-1520) et dans la palette chaude de Venise pour élaborer un style inédit, empreint de douceur et de sensualité. Ses compositions, parmi les plus prisées des collectionneurs européens jusqu’à la fin du XVIIᵉ siècle, ont influencé de manière déterminante les peintres français et italiens des XVIIᵉ et XVIIIᵉ siècles. 

Ce tableau appartient à la jeunesse de l’artiste. Fort d’un séjour à Rome réalisé vers 1517-1520, le peintre y exprime l’admiration ressentie devant les Madones de Raphaël auxquelles il emprunte les attitudes des personnages. Saint Joseph reprend la pose de la même figure dans La Madone de Lorette de Raphaël (Chantilly, Musée Condé), le petit saint Jean offrant le bâton cruciforme à Jésus s’apparente au même motif dans la Madone du duc d’Albe (Washington, National Gallery of Art), la pose de l’Enfant semble inspirée de la Madone au chardonneret (Florence, Galerie des Offices). Après avoir sans doute appartenu aux collections des Gonzague, le tableau est acquis dans les années 1620 par Charles Ier d’Angleterre. Il passe après sa mort dans la collection du banquier Everhard Jabach qui le vend à Louis XIV en 1662. Installé dans les appartements royaux de Versailles, le tableau est versé au Louvre après la Révolution puis déposé à Orléans en 1872.  ");
        $manager->persist($artwork4);
        $this->addReference('artwork4', $artwork4);

        $artwork5 = new Artwork();
        $artwork5->setApproximativeDate(true);
        $artwork5->setCartel($this->getReference('cartel5'));
        $artwork5->setDate(1751);
        $artwork5->setTitle("Aignan – Thomas Desfriches");
        $artwork5->setImage('/images/Perronneau.jpg');
        $artwork5->setMuseum();
        $artwork5->setDescription("L’acquisition en vente publique de ce portrait – sans doute le chef-d’œuvre de Perronneau – est un évènement historique dans l’histoire du musée. Resté chez les descendants de Desfriches depuis le XVIIIᵉ siècle, convoité génération après génération par les plus grands marchands et collectionneurs (il a atteint le prix record de 412.500 euros) son entrée au musée d’Orléans a enrichi les collections non seulement de son plus beau pastel, mais également du portrait du fondateur du musée.

Riche négociant orléanais, Desfriches est de ces personnalités qui changent le destin d’une ville. C’est lui, en l’occurrence, qui a permis qu’Orléans devienne au XVIIIᵉ siècle une ville artistique accueillant les plus grands artistes du temps pour des commandes religieuses ou privées. D’abord lancé dans la carrière d’artiste qui le conduit à l’atelier de Dominé, à Orléans, jusqu’aux cours de Nicolas Bertin et de Natoire à Paris, il revient à Orléans en 1737 pour reprendre le négoce familial, conservant de ses années parisiennes un carnet d’adresses bien rempli et des amitiés indéfectibles, à commencer par Perronneau, Cochin ou Nonotte. Devenu un riche négociant dans les produits liés au commerce de Loire (sucre, épices, textiles, probablement esclaves, dernier maillon du commerce triangulaire), il fonde en 1786 avec le comte de Bizemont l’Ecole gratuite de dessin et il confie à Cochin, secrétaire perpétuel de l’Académie, le soin de choisir à Paris le professeur qui enseignera à Orléans. Ce sera Jean Bardin, qui ouvre en 1797 avec Desfriches le musée d’Orléans pour réunir des saisies révolutionnaires. 

Perronneau a réalisé ce portrait lors de son premier long séjour à Orléans, en 1751. Offert comme bien d’autres pastels à Desfriches, grand amateur et collectionneur, ce portrait scelle une amitié qui conduit régulièrement Perronneau à Orléans où il trouve une clientèle séduite par la nonchalance des attitudes et la touche énergique de ses portraits, au pastel et à l’huile. C’est toutefois dans ce portrait de Desfriches, plus artiste que bourgeois, le carton à dessins sous le bras, que la sprezzatura chère à Perronneau trouve sa plus parfaite incarnation, reflétant la personnalité bienveillante et spirituelle de ce grand homme des Lumières.");
        $manager->persist($artwork5);
        $this->addReference('artwork5', $artwork5);

        $artwork6 = new Artwork();
        $artwork6->setApproximativeDate(true);
        $artwork6->setCartel($this->getReference('cartel6'));
        $artwork6->setDate(2016);
        $artwork6->setTitle("Paysage Urbain");
        $artwork6->setImage('/images/man_et_pia1.jpg');
        $artwork6->setMuseum();
        $artwork6->setDescription("Man&Pia est un duo d'artistes formé par Manolo Chétien et Pia Loro, qui se sont rencontrés en 1987 aux Arts appliqués Olivier de Serres à Paris. Lui est créateur graphique et photographe, elle, architecte d'intérieur et plasticienne. Ensemble, ils fondent un studio de design graphique en 1996 et développent un procédé de photographie plastique novateur qui leur permet de faire de nombreuses expositions en France et à l'étranger. 

En parallèle de leur activité de design, Manolo et Pia ont également un atelier dans lequel ils peignent à quatre mains. Ils réalisent des oeuvres à l'acrylique sur toile représentant principalement des paysages aux tons chauds et automnaux dans un style figuratif et stylisé.
");
        $manager->persist($artwork6);
        $this->addReference('artwork6', $artwork6);

        $artwork7 = new Artwork();
        $artwork7->setApproximativeDate(true);
        $artwork7->setCartel($this->getReference('cartel7'));
        $artwork7->setDate(null);
        $artwork7->setTitle("Paysage");
        $artwork7->setImage('/images/man_et_pia2.jpg');
        $artwork7->setMuseum();
        $artwork7->setDescription("Man&Pia est un duo d'artistes formé par Manolo Chétien et Pia Loro, qui se sont rencontrés en 1987 aux Arts appliqués Olivier de Serres à Paris. Lui est créateur graphique et photographe, elle, architecte d'intérieur et plasticienne. Ensemble, ils fondent un studio de design graphique en 1996 et développent un procédé de photographie plastique novateur qui leur permet de faire de nombreuses expositions en France et à l'étranger. 

En parallèle de leur activité de design, Manolo et Pia ont également un atelier dans lequel ils peignent à quatre mains. Ils réalisent des oeuvres à l'acrylique sur toile représentant principalement des paysages aux tons chauds et automnaux dans un style figuratif et stylisé.
");

        $manager->persist($artwork7);
        $this->addReference('artwork7', $artwork7);

        $artwork8 = new Artwork();
        $artwork8->setApproximativeDate(true);
        $artwork8->setCartel($this->getReference('cartel8'));
        $artwork8->setDate(null);
        $artwork8->setTitle('MP-006');
        $artwork8->setImage('/images/MP-006.jpg');
        $artwork8->setMuseum();
        $artwork8->setDescription("Man&Pia est un duo d'artistes formé par Manolo Chétien et Pia Loro, qui se sont rencontrés en 1987 aux Arts appliqués Olivier de Serres à Paris. Lui est créateur graphique et photographe, elle, architecte d'intérieur et plasticienne. Ensemble, ils fondent un studio de design graphique en 1996 et développent un procédé de photographie plastique novateur qui leur permet de faire de nombreuses expositions en France et à l'étranger. 
 
En parallèle de leur activité de design, Manolo et Pia ont également un atelier dans lequel ils peignent à quatre mains. Ils réalisent des oeuvres à l'acrylique sur toile représentant principalement des paysages aux tons chauds et automnaux dans un style figuratif et stylisé.
");

        $manager->persist($artwork8);
        $this->addReference('artwork8', $artwork8);

        $artwork9 = new Artwork();
        $artwork9->setApproximativeDate(true);
        $artwork9->setCartel($this->getReference('cartel9'));
        $artwork9->setDate(null);
        $artwork9->setTitle('Manolo Chrétien');
        $artwork9->setImage('/images/manolo.jpg');
        $artwork9->setMuseum();
        $artwork9->setDescription("Manolo Chrétien est un photographe plasticien. Fils de pilote ayant grandi près de la base aérienne à Orange, il se fascine très jeune, pour l'aéronautique, et ces fantastiques machines crées pour accélérer le temps. Avions, voitures et fusées sont les symboles d'un monde en mouvement qui repousse toutes les frontières. Manolo Chrétien en capture la beauté magique pour l’imprimer sur aluminium. Ses ‘alluminations’ sont le miroir de l'ambition humaine. 
L’artiste a prolongé sa recherche photographique sur la fluidité et les reflets en investiguant la dynamique des vagues et des flux aquatiques. Au travers son regard, l’océan devient une onde métallique, une mécanique naturelle. Manolo Chrétien vit et travaille en France.
");

        $manager->persist($artwork9);
        $this->addReference('artwork9', $artwork9);

        $artwork10 = new Artwork();
        $artwork10->setApproximativeDate(true);
        $artwork10->setCartel($this->getReference('cartel10'));
        $artwork10->setDate(null);
        $artwork10->setTitle('Dassault Mystère IV A  MP-004');
        $artwork10->setImage('/images/MP-004.jpg');
        $artwork10->setMuseum();
        $artwork10->setDescription("Manolo Chrétien est un photographe plasticien. Fils de pilote ayant grandi près de la base aérienne à Orange, il se fascine très jeune, pour l'aéronautique, et ces fantastiques machines crées pour accélérer le temps. Avions, voitures et fusées sont les symboles d'un monde en mouvement qui repousse toutes les frontières. Manolo Chrétien en capture la beauté magique pour l’imprimer sur aluminium. Ses ‘alluminations’ sont le miroir de l'ambition humaine. 
L’artiste a prolongé sa recherche photographique sur la fluidité et les reflets en investiguant la dynamique des vagues et des flux aquatiques. Au travers son regard, l’océan devient une onde métallique, une mécanique naturelle. Manolo Chrétien vit et travaille en France.

Le Dassault MD-454 Mystère IV était un chasseur de jour français des années 1950, qui connut une longue carrière en France, où il resta en service jusqu'en 1982. De nombreux exemplaires ont été exportés en Inde et en Israël.
Le premier Mystère IV A est réceptionné par la 12e escadre de Cambrai le 25 mai 1955. C'est sur cette base qu'est formée une première patrouille acrobatique dotée du nouvel avion. Le 14 juillet 1955, douze de ces appareils défilent au-dessus des Champs-Élysées. À partir de la fin 1955, six escadres de chasse sont équipées du Mystère IV A). De 1957 à 1964, il a été la monture de la Patrouille de France. 
Les derniers Mystère IV terminent leur carrière à la 8e Escadre de Chasse de Cazaux, où ils assurent le perfectionnement des futurs pilotes de combat. Leur retrait définitif, après presque 30 ans de service, intervient au mois de novembre 1982, lors de la conversion de la 8e Escadre sur Alpha Jet.

L'État d'Israël passe une commande de 59 Mystère IV A le 28 décembre 1955. Tous connaissent l'épreuve du feu avec succès lors de la crise du canal de Suez, en 1956. Le 30 octobre, le Mystère IV obtient sa première victoire quand 8 appareils affrontent 12 MiG-15 égyptiens. Dans les jours suivants, deux Mystère IV affrontent 4 De Havilland Vampire égyptiens et les abattent tous.

L'Inde acquiert 110 exemplaires du Mystère IV, qui sont engagés lors des conflits de 1965 et 1971 contre le Pakistan dans des missions d'attaque au sol.
");

        $manager->persist($artwork10);
        $this->addReference('artwork10', $artwork10);

        $manager->flush();
    }

    public function getDependencies()
    {
        return[
            CartelFixtures::class,
        ];
    }
}
