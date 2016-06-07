<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 21/05/2016
 * Time: 22:46
 */

namespace SitePlaqueBundle\Manager;

use Doctrine\ORM\EntityManager;
use SitePlaqueBundle\Entity\Plaque;
use SitePlaqueBundle\Repository\PlaqueRepository;


class DevisManager
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
        return $this->em->getRepository("SitePlaqueBundle:Devis");
    }

}