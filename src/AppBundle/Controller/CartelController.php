<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 14/06/18
 * Time: 19:05
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Cartel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CartelController extends Controller
{

    /**
     * @param Cartel $cartel
     *
     * @Route("cartel/{id}", name="cartel")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Cartel $cartel)
    {
        $em = $this->getDoctrine()->getManager();
        $cartels = $em->getRepository('AppBundle:Cartel')->findAll();
        $userName = $this->getUser();

        return $this->render('cartel/cartel.html.twig', [
            'cartel' => $cartel,
            'cartels' => $cartels,
            'userName' => $userName,
        ]);
    }

}