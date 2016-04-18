<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 06/04/2016
 * Time: 19:18
 */

namespace SitePlaqueBundle\Controller;

use SitePlaqueBundle\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SitePlaqueBundle\Manager\ClientManager;
use SitePlaqueBundle\Form;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class ClientController extends controller
{
    private function getManager()
    {
        return new ClientManager($this->get('doctrine')->getManager());
    }

    /**
     * @Route("admin/client/liste", name="liste_client")
     */
    public function indexAction()
    {

        $clients = $this->getDoctrine()
            ->getManager()
            ->getRepository('SitePlaqueBundle:Client')
            ->getClients()
        ;


        // L'appel de la vue ne change pas
        return $this->render('SitePlaqueBundle:Client:index.html.twig', array(
            'arrayClients' => $clients
        ));
    }

    /*public function viewAction($id)
    {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // Pour récupérer une annonce unique : on utilise find()
        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        // On vérifie que l'annonce avec cet id existe bien
        if ($advert === null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

        // On récupère la liste des advertSkill pour l'annonce $advert
        $listAdvertSkills = $em->getRepository('OCPlatformBundle:AdvertSkill')->findByAdvert($advert);

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
        return $this->render('SitePlaqueBundle:Client:view.html.twig', array(
            'advert'           => $advert,
            'listAdvertSkills' => $listAdvertSkills,
        ));
    }*/

    public function addAction(Request $request)
    {
        // On crée un objet Advert
        $client = new Client();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $client);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('nomClient', 'text', array('label' => 'Nom'))
            ->add('prenomClient', 'text', array('label' => 'Prénom'))
            ->add('raisonSociale', 'text', array('label' => 'Raison sociale'))
            ->add('siret', 'integer', array('label' => 'Siret'))
            ->add('email', 'text', array('label' => 'E-mail'))
            ->add('tel', 'text', array('label' => 'Téléphone'))
            ->add('login', 'text', array('label' => 'Login'))
            ->add('mdp', 'text', array('label' => 'Mot de passe'));


        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('SitePlaqueBundle:Client:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /*public function editAction($id)
    {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // On récupère l'entité correspondant à l'id $id
        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        // Si l'annonce n'existe pas, on affiche une erreur 404
        if ($advert == null) {
            throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
        }

        // Ici, on s'occupera de la création et de la gestion du formulaire

        return $this->render('SitePlaqueBundle:Client:edit.html.twig', array(
            'advert' => $advert
        ));
    }*/

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

    /*public function menuAction($limit = 3)
    {
        $listAdverts = $this->getDoctrine()
            ->getManager()
            ->getRepository('OCPlatformBundle:Advert')
            ->findBy(
                array(),                 // Pas de critère
                array('date' => 'desc'), // On trie par date décroissante
                $limit,                  // On sélectionne $limit annonces
                0                        // À partir du premier
            );

        return $this->render('SitePlaqueBundle:Client:menu.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }*/

    /**
     * @Route("/admin/employee/add", name="admin_employee_addpage")
     */
    /*public function addAction()
    {
        // Création d'un nouveau client
        $client = new Client();

        // Création du modèle du formulaire qui est lié à l'entité client
        $model = $this->get('form.factory')->create(new Form\Type\UtilisateurType(), $client);

        // Obtention de l'objet "request"
        $request = $this->get('request');
        // Si l'utilisateur soumet le formulaire
        if ($request->getMethod() == 'POST')
        {
            // Attachement du modèle à l'objet "request"
            $model->handleRequest($request);
            if ($model->isValid())
            {
                // Obtention du manager
                $manager = $this->getManager();
                // Validation de l'entité
                $manager->saveEmployee($client);

                $employee = $this->getManager()->loadAllEmployees();

                // on utilise le template de l'action register
                //return $this->render('admin/employee/index.html.twig', array('form' => $model->createView(), 'employee' => $employee) );

                // Redirection vers la page de modification d'un Employé
                return new RedirectResponse($this->generateUrl('admin_employee_editpage', array('empId' => $employee->getEmpId())));

            }
    }*/

}