<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 13/06/18
 * Time: 18:45
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Artwork;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ArtworkController extends Controller
{
    /**
     * @param Artwork $artwork
     *
     * @Route("artwork/{id}", name="artwork")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Artwork $artwork)
    {
        return $this->render('artwork/artwork.html.twig', ['artwork' => $artwork]);
    }

}