<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 11/06/2016
 * Time: 19:39
 */

namespace SitePlaqueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use SitePlaqueBundle\Form\PrixUnitaireType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SitePlaqueBundle\Entity\PrixUnitaire;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PrixUnitaireController extends Controller
{

    /**
     * return SitePlaqueBundle\PrixUnitaireManager.
     */
    protected function getManager()
    {

        return $this->get('doctrine')->getManager();
    }

    /**
     *
     *@Route("/admin/prixUnitaire/edit/{id}")
     *
     *@param int  $id
     *
     *@return Response
     *
     */
    public function editAction($id , Request $request)
    {

        $em = $this->container->get('doctrine')->getManager();
        $prixunitaire = $em->getRepository('SitePlaqueBundle:PrixUnitaire')->find($id);

        if (!$prixunitaire) {
            throw $this->createNotFoundException('La plaque n\'existe pas.');
        }

        $form = $this->createForm(PrixUnitaireType::class, $prixunitaire);

        $form->handleRequest($request);

            if ($request->getMethod() == "POST") {

                if ($form->isValid())
                {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($prixunitaire);
                    $em->flush();

                    return $this->redirect($this->generateUrl('prix_success', array('id' => $prixunitaire->getId())));
                }
            }


        $content= $this->get('templating')->render('SitePlaqueBundle:PrixUnitaire:edit.html.twig', array('form' => $form->createView(),'prixunitaire' => $prixunitaire));

        return new Response($content);
    }

    public function succesAction()
    {

        $content = $this->get('templating')->render('SitePlaqueBundle:PrixUnitaire:success.html.twig');
        return new Response($content);


    }

    public function listAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $prix = $em->getRepository('SitePlaqueBundle:PrixUnitaire')->findAll();

        $content = $this->get('templating')->render('SitePlaqueBundle:PrixUnitaire:index.html.twig', array('prix' => $prix));
        return new Response($content);


    }

}