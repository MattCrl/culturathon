<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 13/06/18
 * Time: 18:45
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Artwork;
use AppBundle\Entity\Favorite;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArtworkController extends Controller
{
    /**
     * @param Artwork $artwork
     *
     * @Route("artwork/{id}", name="artwork")
     * @Method({"GET", "POST"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Artwork $artwork, Request $request)
    {
        $favorite = new Favorite();
        $formBuilder = $this->createFormBuilder($favorite);

        $em = $this->getDoctrine()->getManager();


        $result = $em->getRepository(Favorite::class)->findOneBy(['artwork' => $artwork->getId(), 'user' => $this->getUser()]);
        $formBuilder->add("j'aime", SubmitType::class, ['label' => "J'aime"]);


        $form = $formBuilder->getForm();

        $form->handleRequest($request);
        $isFav = false;
        if ($form->isSubmitted() && $form->isValid()) {
            if (empty($result)) {
                $favorite->setArtwork($artwork);
                $favorite->setUser($this->getUser());
                $em->persist($favorite);
                $em->flush();
                $isFav = true;
            } else {
                $favorite = $result;
                $em->remove($favorite);
                $em->flush();
                $isFav = false;
            }
        }

        /// Related artworks
        /// TODO order by
        $related = $em->getRepository(Artwork::class)
            ->createQueryBuilder('a')
            ->join('a.tags', 't')
            ->where('t.id IN ( :ids )')
            ->setParameter('ids', $artwork->getTags())
            ->getQuery()
            ->getResult();

        $userName = $this->getUser();

        return $this->render('artwork/artwork.html.twig',
            [
                'artwork' => $artwork,
                'favorite' => $isFav,
                'form' => $form->createView(),
                'relatedArtworks' => $related,
                'user' => $this->getUser(),
                'userName' => $userName,
            ]);
    }
}
