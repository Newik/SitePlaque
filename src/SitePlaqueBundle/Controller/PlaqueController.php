<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 21/05/2016
 * Time: 14:26
 */

namespace SitePlaqueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use SitePlaqueBundle\Form\PlaqueType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SitePlaqueBundle\Entity\Plaque;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use SitePlaqueBundle\Manager\PlaqueManager;
use UserBundle\Entity\Utilisateur;


class PlaqueController extends Controller
{
    /**
     * return SitePlaqueBundle\PlaqueManager.
     */
    protected function getManager()
    {

        return $this->get('doctrine')->getManager();
    }

    public function indexAction()
    {
        $em = $this->container->get('doctrine')->getManager();

        $utilisateurSession = $this->getUser()->getId();

        // on récupère l'identifiant de la session utilisateur.

        $plaques = $em->getRepository('SitePlaqueBundle:Plaque')->getByUtilisateur($utilisateurSession);


        $content = $this->get('templating')->render('SitePlaqueBundle:Plaque:index.html.twig', array('plaques' => $plaques));
        return new Response($content);

    }

    /**
     * Voir détails d'une plaque.

     * @route("/plaques/maplaque/{id}")
     *
     * @param int     $id
     *
     * @return array
     *
     * @throws NotFoundHttpException quand la plaque n'existe pas.
     */
    public function singleAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $plaque = $em->getRepository('SitePlaqueBundle:Plaque')->getPlaque($id);
        //var_dump($plaque);exit;

        if (!$plaque) {
            throw $this->createNotFoundException('La plaque n\'existe pas.');
        }


        $content = $this->get('templating')->render('SitePlaqueBundle:Plaque:single.html.twig', array('plaque' => $plaque));
        return new Response($content);

    }

    /**
     *
     * @Route("/plaques/ajout")
     *
     */
    public function addAction(Request $request)
    {
        $laplaque = new Plaque();

        $form = $this->createForm(PlaqueType::class, $laplaque);
        $form->get('dateCreation')->setData(new \DateTime());

        $user = $this->getUser();

        //var_dump($laplaque);exit;

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $laplaque->setUtilisateur($user);
            $laplaque->setNombreTrous($laplaque->calculnbTrou());
            $em->persist($laplaque);
            $em->flush();


            return $this->redirect($this->generateUrl('plaque_succes', array('id' => $laplaque->getId())));
        }

        $content = $this->get('templating')->render('SitePlaqueBundle:Plaque:add.html.twig', array( 'form' => $form->createView(), 'plaque' => $laplaque));
        return new Response($content);
    }

    public function succesAction()
    {

        $content = $this->get('templating')->render('SitePlaqueBundle:Plaque:succes.html.twig');
        return new Response($content);


    }


    public function deletevalideAction()
    {

        $content = $this->get('templating')->render('SitePlaqueBundle:Plaque:delete.html.twig');
        return new Response($content);


    }

    /**
     *
     *@Route("/plaques/edit/{id}")
     *
     *@param int  $id
     *
     *@return Response
     *
     */
    public function editAction($id , Request $request)
    {

        $em = $this->container->get('doctrine')->getManager();
        $plaque = $em->getRepository('SitePlaqueBundle:Plaque')->find($id);

        if (!$plaque) {
            throw $this->createNotFoundException('La plaque n\'existe pas.');
        }


        $user = $this->getUser();

        $form = $this->createForm(PlaqueType::class, $plaque);

               if($user->getPlaques()->contains($plaque))
               {
                   $form->handleRequest($request);

                   if ($request->getMethod() == "POST") {

                       if ($form->isValid())
                       {
                           $em = $this->getDoctrine()->getManager();
                           $plaque->setUtilisateur($user);
                           $plaque->setNombreTrous($plaque->calculNbTrou());
                           $em->persist($plaque);
                           $em->flush();

                           return $this->redirect($this->generateUrl('plaque_succes', array('id' => $plaque->getId())));
                       }
                   }
               }

        $content= $this->get('templating')->render('SitePlaqueBundle:Plaque:edit.html.twig', array('form' => $form->createView(),'plaque' => $plaque));

        return new Response($content);
    }

    /**
     *
     *@Route("/plaques/suppression/{id}")
     *
     *@param int  $id
     *
     *@return Response
     *
     */
    public function deleteAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $laplaque = $em->getRepository('SitePlaqueBundle:Plaque')->find($id);

        if (!$laplaque)
        {
            throw new NotFoundHttpException("Plaque non trouvée");
        }

        $em->remove($laplaque);
        $em->flush();


        return $this->redirect($this->generateUrl('plaque_supprime_valide'));


    }

    public function listAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $plaques = $em->getRepository('SitePlaqueBundle:Plaque')->findAll();

        $content = $this->get('templating')->render('SitePlaqueBundle:Plaque:index.html.twig', array('plaques' => $plaques));
        return new Response($content);


    }

}