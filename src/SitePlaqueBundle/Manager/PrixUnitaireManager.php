<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 11/06/2016
 * Time: 19:52
 */

namespace SitePlaqueBundle\Manager;

use Doctrine\ORM\EntityManager;
use SitePlaqueBundle\Entity\PrixUnitaire;
use SitePlaqueBundle\Repository\PlaqueRepository;


class PrixUnitaireManager
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
        return $this->em->getRepository("SitePlaqueBundle:PrixUnitaire");
    }

}