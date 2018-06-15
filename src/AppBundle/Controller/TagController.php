<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TagController extends Controller
{

    /**
     * @Route("/tag/{id}", name="tag")
     * @param Tag $tag
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Tag $tag)
    {
        $userName = $this->getUser();
        return $this->render('tag/tag.html.twig', [
            'tag' => $tag,
            'userName' => $userName,
        ]);
    }
}