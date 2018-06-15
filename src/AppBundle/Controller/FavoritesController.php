<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 15/06/18
 * Time: 09:50
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Artwork;
use AppBundle\Entity\Favorite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/favorites")
 */
class FavoritesController extends controller
{
    /**
     * @Route("/", name="favorites_home")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $favorites = $em->getRepository(Favorite::class)->findBy(['user' => $this->getUser()->getId()]);

        return $this->render('favorites/index.html.twig', [
            'favorites' => $favorites,
            'userName' => $this->getUser(),
        ]);
    }
}