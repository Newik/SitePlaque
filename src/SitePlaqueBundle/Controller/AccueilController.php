<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 16/05/2016
 * Time: 20:38
 */

namespace SitePlaqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class AccueilController extends Controller
{

    public function indexAction()
    {
        $content = $this->get('templating')->render('SitePlaqueBundle:Accueil:index.html.twig');
        return new Response($content);


    }

}