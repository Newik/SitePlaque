<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 29/03/2016
 * Time: 15:49
 */

namespace SitePlaqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="SitePlaqueBundle\Repository\ClientRepository")
 *
 */


class Client extends Utilisateur
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_client", type="string", nullable=false)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_client", type="string", nullable=false)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="raison_sociale", type="string", nullable=false)
     */
    private $raisonSociale;

    /**
     * @var integer
     *
     * @ORM\Column(name="siret", type="integer", nullable=false)
     */
    private $siret;

    /**
     * @var \Doctrine\Common\Collections\Collection $plaques
     *
     * @ORM\OneToMany(targetEntity="Plaque", mappedBy="client", cascade={"all"})
     */
    private $plaques;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", nullable=false)
     */
    private $email;


    /**
     * Constructor.
     */
    public function __construct()
    {
        //echo "hello";exit;

    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get nomClient.
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set nom.
     *
     * @param string $nomClient
     *
     * @return Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get prenomClient.
     *
     * @return string
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set prenomClient.
     *
     * @param string $prenomClient
     *
     * @return Client
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    /**
 * Get raisonSociale.
 *
 * @return string
 */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set raisonSociale.
     *
     * @param string $raisonSociale
     *
     * @return Client
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get siret.
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set siret.
     *
     * @param integer $siret
     *
     * @return Client
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get plaques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaques()
    {
        return $this->plaques;
    }

    /**
     * Get tel.
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set tel.
     *
     * @param string $tel
     *
     * @return Client
     */
    public function setTel($tel)
    {
        $this->nomClient = $tel;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->tel;
    }

    /**
     * Set tel.
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


}