<?php

/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 26/03/2016
 * Time: 16:37
 */

namespace SitePlaqueBundle\Repository;

/**
 * Class PlaqueRepository
 * @package SitePlaqueBundle\Repository
 */

class PlaqueRepository extends \Doctrine\ORM\EntityRepository
{

    public function getPlaque($id){

        $qb = $this->_em->createQueryBuilder();

        return $qb->select('p')
            ->from('SitePlaqueBundle:Plaque', 'p')
            ->where('p.id=:id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

    }

    public function getByUtilisateur($utilisateurId)
    {
        $qb = $this->_em->createQueryBuilder();

        return $qb->select('p')
            ->from('SitePlaqueBundle:Plaque', 'p')
            ->where('p.utilisateur=:utilisateur')
            ->setParameter('utilisateur', $utilisateurId)
            ->getQuery()
            ->getResult()
            ;
    }


}