<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tags = $em->getRepository(Tag::class)->findBy(['showHighlight' => true]);
        $tags = array_filter($tags, function (Tag $t) {
            return count($t->getArtworks()) > 2;
        });
        $tags = $em->getRepository('AppBundle:Tag')->findAll();
        $userName = $this->getUser();

        return $this->render('default/index.html.twig', [
            'tags' => $tags,
            'userName' => $userName,
        ]);
    }
}
