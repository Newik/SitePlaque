<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 31/03/2016
 * Time: 13:59
 */

namespace SitePlaqueBundle\Repository;

/**
 * Class PrixUnitaireRepository
 * @package SitePlaqueBundle\Repository
 */

class PrixUnitaireRepository extends \Doctrine\ORM\EntityRepository
{
    public function getPrixUnitaire($id){

        $qb = $this->_em->createQueryBuilder();

        return $qb->select('pun')
            ->from('SitePlaqueBundle:PrixUnitaire', 'pun')
            ->where('pun.id=:id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

    }

}