<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 14/06/18
 * Time: 15:39
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TagFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $tag1 = new Tag;
        $tag1->setName('First Tag');
        $tag1->addArtwork($this->getReference('artwork1'));
        $tag1->addArtwork($this->getReference('artwork2'));
        $tag1->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag1);

        $tag2 = new Tag;
        $tag2->setName('Second Tag');
        $tag2->addArtwork($this->getReference('artwork1'));
        $tag2->addArtwork($this->getReference('artwork2'));
        $tag2->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag2);

        $tag3 = new Tag;
        $tag3->setName('Third Tag');
        $tag3->addArtwork($this->getReference('artwork1'));
        $tag3->addArtwork($this->getReference('artwork2'));
        $tag3->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag3);

        $tag4 = new Tag;
        $tag4->setName('Fourth Tag');
        $tag4->addArtwork($this->getReference('artwork1'));
        $tag4->addArtwork($this->getReference('artwork2'));
        $tag4->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag4);

        $tag5 = new Tag;
        $tag5->setName('Fifth Tag');
        $tag5->addArtwork($this->getReference('artwork1'));
        $tag5->addArtwork($this->getReference('artwork2'));
        $tag5->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag5);

        $tag6 = new Tag;
        $tag6->setName('Sixth Tag');
        $tag6->addArtwork($this->getReference('artwork1'));
        $tag6->addArtwork($this->getReference('artwork2'));
        $tag6->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag6);

        $tag7 = new Tag;
        $tag7->setName('Seventh Tag');
        $tag7->addArtwork($this->getReference('artwork1'));
        $tag7->addArtwork($this->getReference('artwork2'));
        $tag7->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag7);

        $tag8 = new Tag;
        $tag8->setName('Eighth Tag');
        $tag8->addArtwork($this->getReference('artwork1'));
        $tag8->addArtwork($this->getReference('artwork2'));
        $tag8->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag8);

        $manager->flush();

    }

    public function getDependencies()
    {
        return[
            ArtworkFixtures::class,
        ];
    }
}