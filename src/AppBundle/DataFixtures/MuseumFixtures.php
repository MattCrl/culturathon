<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Museum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MuseumFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $museum1 = new Museum();
        $museum1->setName('Centre Pompidou');
        $museum1->setAddress('Place Georges Pompidou, 75004 Paris');
        $museum1->setCountry('France');
        $manager->persist($museum1);
        $manager->flush();
    }
}
