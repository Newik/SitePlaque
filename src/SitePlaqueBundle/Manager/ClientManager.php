<?php

namespace SitePlaqueBundle\Manager;

use SitePlaqueBundle\Entity\Client;
use SitePlaqueBundle\Repository\ClientRepository;

/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 06/04/2016
 * Time: 22:11
 */
class ClientManager
{

    protected $entityManager;
    protected $repository;

    public function __construct($em)
    {
        $this->entityManager = $em;
        $this->repository = $em->getRepository('SitePlaqueBundle:Client');
    }

    public function loadAllEmployees($orderedByName = true)
    {
        if ($orderedByName)
            $employees = $this->repository->findAllOrderedByName();
        else
            $employees = $this->repository->findAll();

        return $employees;
    }


    /**
     * Load Client entity
     *
     * @param String $id
     */
    public function loadEmployee($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Save Client entity
     *
     * @param Client $client
     */
    public function saveEmployee($client)
    {
        $this->entityManager->persist($client);
        $this->entityManager->flush();
    }

    /**
     * Remove Client entity
     *
     * @param Client $client
     */
    public function removeEmployee(Client $client)
    {
        $this->entityManager->remove($client);
        $this->entityManager->flush();
    }

}