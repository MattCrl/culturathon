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
        $tag1->setShowHighlight(true);
        $tag1->setName('Huile sur toile');
        $tag1->addArtwork($this->getReference('artwork2'));
        $tag1->addArtwork($this->getReference('artwork3'));
        $manager->persist($tag1);

        $tag2 = new Tag;
        $tag2->setShowHighlight(true);
        $tag2->setName('Huile sur bois');
        $tag2->addArtwork($this->getReference('artwork1'));
        $tag2->addArtwork($this->getReference('artwork4'));
        $manager->persist($tag2);

        $tag3 = new Tag;
        $tag3->setShowHighlight(true);
        $tag3->setName('Pastel');
        $tag3->addArtwork($this->getReference('artwork5'));
        $manager->persist($tag3);

        $tag4 = new Tag;
        $tag4->setShowHighlight(true);
        $tag4->setName('Techniques mixtes');
        $tag4->addArtwork($this->getReference('artwork6'));
        $tag4->addArtwork($this->getReference('artwork7'));
        $tag4->addArtwork($this->getReference('artwork8'));
        $manager->persist($tag4);

        $tag5 = new Tag;
        $tag5->setShowHighlight(true);
        $tag5->setName('Photographie');
        $tag5->addArtwork($this->getReference('artwork10'));
        $tag5->addArtwork($this->getReference('artwork9'));
        $manager->persist($tag5);

        $tag6 = new Tag;
        $tag6->setShowHighlight(true);
        $tag6->setName('Couleurs sombres');
        $tag6->addArtwork($this->getReference('artwork1'));
        $tag6->addArtwork($this->getReference('artwork3'));
        $tag6->addArtwork($this->getReference('artwork4'));
        $tag6->addArtwork($this->getReference('artwork7'));
        $tag6->addArtwork($this->getReference('artwork8'));
        $manager->persist($tag6);

        $tag7 = new Tag;
        $tag7->setShowHighlight(true);
        $tag7->setName('Couleurs claires');
        $tag7->addArtwork($this->getReference('artwork2'));
        $tag7->addArtwork($this->getReference('artwork5'));
        $tag7->addArtwork($this->getReference('artwork6'));
        $tag7->addArtwork($this->getReference('artwork9'));
        $manager->persist($tag7);

        $tag8 = new Tag;
        $tag8->setShowHighlight(true);
        $tag8->setName('Moderne');
        $tag8->addArtwork($this->getReference('artwork6'));
        $tag8->addArtwork($this->getReference('artwork7'));
        $tag8->addArtwork($this->getReference('artwork8'));
        $tag8->addArtwork($this->getReference('artwork9'));
        $tag8->addArtwork($this->getReference('artwork10'));
        $manager->persist($tag8);

        $tag9 = new Tag;
        $tag9->setShowHighlight(true);
        $tag9->setName('Classique');
        $tag9->addArtwork($this->getReference('artwork1'));
        $tag9->addArtwork($this->getReference('artwork2'));
        $tag9->addArtwork($this->getReference('artwork3'));
        $tag9->addArtwork($this->getReference('artwork4'));
        $tag9->addArtwork($this->getReference('artwork5'));
        $manager->persist($tag9);

        $manager->flush();

    }

    public function getDependencies()
    {
        return [
            ArtworkFixtures::class,
        ];
    }
}