<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 29/03/2016
 * Time: 17:35
 */

namespace SitePlaqueBundle\Repository;

/**
 * Class ClientRepository
 * @package SitePlaqueBundle\Repository
 */

class ClientRepository extends \Doctrine\ORM\EntityRepository
{
    public function getClients()
    {
        $query = $this->createQueryBuilder('c')
            ->orderBy('c.nomClient', 'DESC')
            ->getQuery()
        ;

        return $query->getResult();
    }

    public function getClient($id){

        $qb = $this->_em->createQueryBuilder();

        return $qb->select('c')
            ->from('SitePlaqueBundle:Client', 'c')
            ->where('c.id=:id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

    }



}