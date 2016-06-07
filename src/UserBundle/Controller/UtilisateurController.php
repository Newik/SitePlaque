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


//getByUtilisateur($utilisateurId)

    public function infoClientAction()
    {

        $em = $this->container->get('doctrine')->getManager();
        $utilisateur = $em->getRepository('UserBundle:Utilisateur')->findOneBy('id');


        // L'appel de la vue ne change pas
        return $this->render('UserBundle:Gestion:index.html.twig', array('arrayUtilisateurs' => $utilisateur));
    }



    /*public function deleteAction($id, Request $request)
    {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // On récupère l'entité correspondant à l'id $id
        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        // Si l'annonce n'existe pas, on affiche une erreur 404
        if ($advert == null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

        if ($request->isMethod('POST')) {
            // Si la requête est en POST, on deletea l'article

            $request->getSession()->getFlashBag()->add('info', 'Annonce bien supprimée.');

            // Puis on redirige vers l'accueil
            return $this->redirect($this->generateUrl('home'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de delete
        return $this->render('SitePlaqueBundle:Client:delete.html.twig', array(
            'advert' => $advert
        ));
    }*/

}