<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 05/04/2016
 * Time: 19:17
 */

namespace SitePlaqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render('SitePlaqueBundle:Home:index.html.twig');
        return new Response($content);
    }
}