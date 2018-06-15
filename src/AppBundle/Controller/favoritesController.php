<?php
/**
 * Created by PhpStorm.
 * User: wilder19
 * Date: 15/06/18
 * Time: 09:50
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Favorite;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/favorites")
 */
class favoritesController extends controller
{
    /**
     * @Route("/", name="favorites_home")
     */
    public function indexAction()
    {
        $userName = $this->getUser();
        return $this->render('favorites/index.html.twig', [
            'userName' => $userName,
        ]);
    }
}