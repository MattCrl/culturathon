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
        $em = $this->getDoctrine()->getManager();

        $result = $em->getRepository(Favorite::class)->findOneBy(['artwork' => $artwork->getId(), 'user' => $this->getUser()]);

            if (empty($result)) {
                $isFav = true;
            } else {
                $isFav = false;
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

        return $this->render('artwork/artwork.html.twig',
            [
                'artwork' => $artwork,
                'favorite' => $isFav,
                'user' => $this->getUser(),
                'relatedArtworks' => $related,
            ]);
    }

    /**
     * @param Artwork $artwork
     *
     * @Route("artwork/{id}/add", name="artwork_add")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Artwork $artwork, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository(Favorite::class)->findOneBy(['artwork' => $artwork->getId(), 'user' => $this->getUser()]);

        $favorite = new Favorite();

        if (empty($result)) {
            $favorite->setArtwork($artwork);
            $favorite->setUser($this->getUser());
            $em->persist($favorite);
            $em->flush();
        }

        return $this->redirectToRoute('artwork', array('id' => $artwork->getId()));
    }

    /**
     * @param Artwork $artwork
     *
     * @Route("artwork/{id}/delete", name="artwork_delete")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction(Artwork $artwork, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository(Favorite::class)->findOneBy(['artwork' => $artwork->getId(), 'user' => $this->getUser()]);
        $em->remove($result);
        $em->flush();

        return $this->redirectToRoute('artwork', array('id' => $artwork->getId()));
    }
}
