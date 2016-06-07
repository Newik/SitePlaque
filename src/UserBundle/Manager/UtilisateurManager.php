<?php

namespace SitePlaque\src\UserBundle\Manager;

use Doctrine\ORM\EntityManager;
use UserBundle\Entity\Utilisateur;
use UserBundle\Repository\UtilisateurRepository;

/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 06/04/2016
 * Time: 22:11
 */
class UtilisateurManager
{

    protected $em;

    /** @var array grades */
    protected $data=[];

    public function __construct(EntityManager $em)
    {
        $this->em = $em;

    }

    public function getRepository()
    {
        return $this->em->getRepository("UserBundle:Utilisateur");
    }


}