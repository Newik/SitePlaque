<?php

namespace SitePlaqueBundle\Manager;

use Doctrine\ORM\EntityManager;
use SitePlaqueBundle\Entity\Plaque;
use SitePlaqueBundle\Repository\PlaqueRepository;

/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 21/05/2016
 * Time: 14:59
 */
class PlaqueManager
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
        return $this->em->getRepository("SitePlaqueBundle:Plaque");
    }

}