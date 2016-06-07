<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 06/06/2016
 * Time: 11:21
 */

namespace SitePlaqueBundle\Controller;

use UserBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminController extends Controller
{

    /**
     * @Route("/admin/listeClient")
     *
     */
    public function listClientAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        //$clients = $em->getRepository('UserBundle:Utilisateur')->findAll();
        $utilisateurs= $em->getRepository('UserBundle:Utilisateur')->getUser();
        //var_dump($clients);exit;

        $content = $this->get('templating')->render('SitePlaqueBundle:Admin:utilisateurs.html.twig', array('utilisateurs' => $utilisateurs));
        return new Response($content);


    }

    /**
     * @Route("/admin/listeDevis")
     *
     */
    public function listDevisAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $devis = $em->getRepository('SitePlaqueBundle:Devis')->findAll();

        $content = $this->get('templating')->render('SitePlaqueBundle:Admin:devis.html.twig', array('devis' => $devis));
        return new Response($content);


    }
}