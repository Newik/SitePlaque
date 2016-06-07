<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 21/05/2016
 * Time: 22:42
 */

namespace SitePlaqueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use SitePlaqueBundle\Form\DevisType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SitePlaqueBundle\Entity\Plaque;
use SitePlaqueBundle\Entity\Devis;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use SitePlaqueBundle\Manager\PlaqueManager;




class DevisController extends Controller
{
    /**
     * return SitePlaqueBundle\DevisManager.
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

        $devis = $em->getRepository('SitePlaqueBundle:Devis')->getByUtilisateur($utilisateurSession);


        $content = $this->get('templating')->render('SitePlaqueBundle:Devis:index.html.twig', array('devis' => $devis));
        return new Response($content);


    }

    /**
     * @Route("/devis/ajout/{id}", name="devis_ajout")
     * @param $id, Request $request
     * @return Response
     */
    public function addAction($id, Request $request)
    {
        $devis = new Devis();
        $form = $this->createForm(DevisType::class, $devis);
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $plaque = $em->getRepository('SitePlaqueBundle:Plaque')->find($id);
        //var_dump($devis);exit;

        $prixUnitaires = $em->getRepository('SitePlaqueBundle:PrixUnitaire')->findall();
       // var_dump($prixUnitaires);exit;

        foreach( $prixUnitaires as $prixUnitaire){

           $devis->getPrixUnitaires()->add($prixUnitaire);

        }

        //var_dump( $prixUnitaires);exit;

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $devis->setPlaque($plaque);
            $devis->setUtilisateur($user);
            $devis->setTotal($devis->calculTotal());
            $em->persist($devis);
            $em->flush();


            return $this->render('SitePlaqueBundle:Devis:single.html.twig', array('devis' => $devis, 'plaque' => $plaque));

        }

            return $this->render('SitePlaqueBundle:Devis:add.html.twig',array('form'=>$form->createView(),'devis'=>$devis,'plaque'=>$plaque ));


    }



    public function deletevalideAction()
    {

        $content = $this->get('templating')->render('SitePlaqueBundle:Devis:delete.html.twig');
        return new Response($content);


    }

    /**
     *
     *@Route("/devis/suppression/{id}")
     *
     *@param int  $id
     *
     *@return Response
     *
     */
    public function deleteAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $devis = $em->getRepository('SitePlaqueBundle:Devis')->find($id);

        //var_dump($devis);exit;

        if (!$devis)
        {
            throw new NotFoundHttpException("Devis non trouvé");
        }

        $em->remove($devis);
        $em->flush();


        return $this->redirect($this->generateUrl('devis_supprime_valide'));


    }

    /**
     * Voir détails d'une devis.

     * @route("/devis/mondevis/{id}")
     *
     * @param int     $id
     *
     * @return array
     *
     * @throws NotFoundHttpException quand le devis n'existe pas.
     */
    public function viewAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $devis = $em->getRepository('SitePlaqueBundle:Devis')->getDevis($id);


        if (!$devis) {
            throw $this->createNotFoundException('Le devis n\'existe pas.');
        }


        $content = $this->get('templating')->render('SitePlaqueBundle:Devis:view.html.twig', array('devis' => $devis));
        return new Response($content);

    }

    public function listAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $devis = $em->getRepository('SitePlaqueBundle:Devis')->findAll();

        $content = $this->get('templating')->render('SitePlaqueBundle:Devis:index.html.twig', array('devis' => $devis));
        return new Response($content);

    }


}