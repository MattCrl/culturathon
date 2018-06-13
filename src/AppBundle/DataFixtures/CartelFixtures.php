<?php
/**
 * Created by PhpStorm.
 * User: wilder22
 * Date: 13/06/18
 * Time: 18:03
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Cartel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CartelFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cartel1 = new Cartel();
        $cartel1->setName('Brueghel');
        $manager->persist($cartel1);

        $cartel2 = new Cartel();
        $cartel2->setName('Cogniet');
        $manager->persist($cartel2);

        $cartel3 = new Cartel();
        $cartel3->setName('Delacroix');
        $manager->persist($cartel3);

        $cartel4 = new Cartel();
        $cartel4->setName('Le Corrège');
        $manager->persist($cartel4);

        $cartel5 = new Cartel();
        $cartel5->setName('Perronneau');
        $manager->persist($cartel5);

        $cartel6 = new Cartel();
        $cartel6->setName('Cable Car');
        $manager->persist($cartel6);

        $cartel7 = new Cartel();
        $cartel7->setName('Lueur de Loire');
        $manager->persist($cartel7);

        $cartel8 = new Cartel();
        $cartel8->setName('MP 006');
        $manager->persist($cartel8);

        $cartel9 = new Cartel();
        $cartel9->setName('Manolo Chrétien NYC');
        $manager->persist($cartel9);

        $cartel10 = new Cartel();
        $cartel10->setName('Mystère');
        $manager->persist($cartel10);

        $manager->flush();

        $this->addReference('cartel1', $cartel1);
        $this->addReference('cartel2', $cartel2);
        $this->addReference('cartel3', $cartel3);
        $this->addReference('cartel4', $cartel4);
        $this->addReference('cartel5', $cartel5);
        $this->addReference('cartel6', $cartel6);
        $this->addReference('cartel7', $cartel7);
        $this->addReference('cartel8', $cartel8);
        $this->addReference('cartel9', $cartel9);
        $this->addReference('cartel10', $cartel10);

    }
}
