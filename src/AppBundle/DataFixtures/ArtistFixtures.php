<?php
/**
 * Created by PhpStorm.
 * User: wilder6
 * Date: 13/06/18
 * Time: 19:05
 */

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Artist;

class ArtistFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $artist1 = new Artist();
        $artist1->setName('Jan BRUEGHEl le jeun');
        $artist1->setBirthdate(1601);
        $artist1->setDeathdate(1678);
        $artist1->setBirthplace('Anvers');
        $artist1->setDeathplace('Anvers');
        $artist1->setIsApproxBirth(false);
        $artist1->setIsApproxDeath(false);
        $manager->persist($artist1);

        $artist2 = new Artist();
        $artist2->setName('Léon COGNIET');
        $artist2->setBirthdate(1794);
        $artist2->setDeathdate(1880);
        $artist2->setBirthplace('Paris');
        $artist2->setDeathplace('Paris');
        $artist2->setIsApproxBirth(false);
        $artist2->setIsApproxDeath(false);
        $manager->persist($artist2);

        $artist3 = new Artist();
        $artist3->setName('Eugène DELACROIX');
        $artist3->setBirthdate(1798);
        $artist3->setDeathdate(1863);
        $artist3->setBirthplace('Charpenton-Saint-Maurice');
        $artist3->setDeathplace('Paris');
        $artist3->setIsApproxBirth(false);
        $artist3->setIsApproxDeath(false);
        $manager->persist($artist3);

        $artist4 = new Artist();
        $artist4->setName('Antonio ALLEGRI dit LE CORREGE');
        $artist4->setBirthdate(1489);
        $artist4->setDeathdate(1534);
        $artist4->setBirthplace('Correggio');
        $artist4->setDeathplace('Correggio');
        $artist4->setIsApproxBirth(true);
        $artist4->setIsApproxDeath(false);
        $manager->persist($artist4);

        $artist5 = new Artist();
        $artist5->setName('Jean-Baptise PERRONNEAU');
        $artist5->setBirthdate(1715);
        $artist5->setDeathdate(1783);
        $artist5->setBirthplace('Paris');
        $artist5->setDeathplace('Amsterdam');
        $artist5->setIsApproxBirth(true);
        $artist5->setIsApproxDeath(false);
        $manager->persist($artist5);

        $artist6 = new Artist();
        $artist6->setName('Man&Pia');
        $manager->persist($artist6);

        $artist7 = new Artist();
        $artist7->setName('Manolo Chrétien');
        $manager->persist($artist7);

        $manager->flush();
    }
}
