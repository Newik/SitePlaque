<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 29/03/2016
 * Time: 17:35
 */

namespace UserBundle\Repository;

/**
 * Class UtilisateurRepository
 * @package UserBundle\Repository
 */

class UtilisateurRepository extends \Doctrine\ORM\EntityRepository
{
    public function getUtilisateurs()
    {
        $query = $this->createQueryBuilder('u')
            ->orderBy('u.nom', 'ASC')
            ->getQuery()
        ;

        return $query->getResult();
    }


    public function getUtilisateur($id){

        $qb = $this->_em->createQueryBuilder();

        return $qb->select('u')
            ->from('UserBundle:Utilisateur', 'u')
            ->where('u.id=:id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

    }

    public function getUser()
    {
        $query = $this->createQueryBuilder('u')
            ->orderBy('u.nom', 'ASC')
            ->getQuery()
        ;

        return $query->getResult();

    }

}