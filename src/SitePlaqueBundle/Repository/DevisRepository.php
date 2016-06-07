<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 26/03/2016
 * Time: 17:02
 */

namespace SitePlaqueBundle\Repository;

/**
 * Class DevisRepository
 * @package SitePlaqueBundle\Repository
 */

class DevisRepository extends \Doctrine\ORM\EntityRepository
{
    public function getDevis($id){

        $qb = $this->_em->createQueryBuilder();

        return $qb->select('d')
            ->from('SitePlaqueBundle:Devis', 'd')
            ->where('d.id=:id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

    }

    public function getByUtilisateur($utilisateurId)
    {
        $qb = $this->_em->createQueryBuilder();

        return $qb->select('d')
            ->from('SitePlaqueBundle:Devis', 'd')
            ->where('d.utilisateur=:utilisateur')
            ->setParameter('utilisateur', $utilisateurId)
            ->getQuery()
            ->getResult()
            ;
    }


}