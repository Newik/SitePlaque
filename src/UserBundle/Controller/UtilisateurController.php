<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 06/04/2016
 * Time: 19:18
 */

namespace UserBundle\Controller;

use UserBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Manager\UtilisateurManager;
use UserBundle\Form;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class UtilisateurController extends controller
{
    private function getManager()
    {
        return $this->get('doctrine')->getManager();
    }

    /**
     * @Route("admin/client/liste", name="liste_client")
     */
    public function indexAction()
    {

        $em = $this->container->get('doctrine')->getManager();
        $utilisateurs = $em->getRepository('UserBundle:Utilisateur')->findAll();


        // L'appel de la vue ne change pas
        return $this->render('UserBundle:Gestion:index.html.twig', array('arrayUtilisateurs' => $utilisateurs));
    }

    /**
     *
     *@Route("/utilisateur/suppression")
     *
     */
    public function warningAction()
    {

        $content = $this->get('templating')->render('UserBundle:Utilisateur:warning.html.twig');
        return new Response($content);


    }

    /**
     *
     *@Route("admin/utilisateur/suppression")
     *
     */
    public function warningAdminAction()
    {

        $content = $this->get('templating')->render('UserBundle:Admin:warningAdmin.html.twig');
        return new Response($content);


    }

    /**
     *
     *@Route("/utilisateur/suppression/valider")
     *
     */
    public function deleteAction()
    {
        $em = $this->container->get('doctrine')->getManager();
        $utilisateur = $this->getUser();
        //var_dump($utilisateur);exit;


        if (!$utilisateur) {
            throw new NotFoundHttpException("Utilisateur non trouvé");
        }

        $em->remove($utilisateur);
        $em->flush();


        return $this->redirect($this->generateUrl('accueil_platform'));

    }

    /**
     * Voir détails d'un utilisateur.

     * @route("/admin/ListeClient/Client/{id}")
     *
     * @param int     $id
     *
     * @return array
     *
     * @throws NotFoundHttpException quand le client n'existe pas.
     */
    public function clientAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $utilisateur = $em->getRepository('UserBundle:Utilisateur')->getUtilisateur($id);
        $admin=$this->getUser()->getId();

        if (!$utilisateur) {
            throw $this->createNotFoundException('L\'utilisateur n\'existe pas.');
        }
        else if ( $id == $admin)
        {

            return $this->redirect($this->generateUrl('admin_warning'));
        }

        $content = $this->get('templating')->render('UserBundle:Utilisateur:client.html.twig', array('utilisateur' => $utilisateur));
        return new Response($content);

    }

    /**
     * Supprimer un utilisateur

     * @route("/admin/suppression/Client/{id}")
     *
     * @param int     $id
     *
     * @return array
     *
     * @throws NotFoundHttpException quand le client n'existe pas.
     */
    public function deleteClientAction($id)
    {
        $em = $this->container->get('doctrine')->getManager();
        $utilisateur = $em->find('UserBundle:Utilisateur', $id);
        //$utilisateur = $em->getRepository('UserBundle:Utilisateur')->getUtilisateur($id);
        $admin=$this->getUser()->getId();
        //var_dump($utilisateur);exit;


        if (!$utilisateur) {
            throw new NotFoundHttpException("Utilisateur non trouvé");
        }
        else if ($id == $admin)
        {
            return $this->redirect($this->generateUrl('admin_warning'));
        }

        $em->remove($utilisateur);
        $em->flush();


        return $this->redirect($this->generateUrl('accueil_platform'));

    }

    public function infoClientAction()
    {

        $em = $this->container->get('doctrine')->getManager();
        $utilisateur = $em->getRepository('UserBundle:Utilisateur')->findOneBy('id');


        // L'appel de la vue ne change pas
        return $this->render('UserBundle:Gestion:index.html.twig', array('arrayUtilisateurs' => $utilisateur));
    }

}