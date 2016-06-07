<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 18/04/2016
 * Time: 19:17
 */

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;




/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UtilisateurRepository")
 *
 */



class Utilisateur extends BaseUser
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", nullable=false)
     */
    private $prenom;


    /**
     * @var string
     *
     * @ORM\Column(name="raison_sociale", type="string", nullable=true)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", nullable=false)
     */
    private $adresse;

    /**
     * @var
     *
     * @ORM\Column(name="code_postale", type="string", length=255, nullable=false)
     */
    private $codePostale;

    /**
     * @var
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="siret", type="string", nullable=true)
     */
    private $siret;

    /**
     *
     * @var \Doctrine\Common\Collections\Collection $plaques
     *
     * @ORM\OneToMany(targetEntity="SitePlaqueBundle\Entity\Plaque", mappedBy="utilisateur", cascade={"persist", "remove", "merge"})
     */
    private $plaques;

    /**
     *
     * @var \Doctrine\Common\Collections\Collection $devis
     *
     * @ORM\OneToMany(targetEntity="SitePlaqueBundle\Entity\Devis", mappedBy="utilisateur", cascade={"all"})
     */
    private $devis;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", nullable=true)
     */
    private $tel;


    /**
     * Constructor.
     */
    public function __construct()
    {
      parent::__construct();
      $this->plaques = new \Doctrine\Common\Collections\ArrayCollection();
      $this->devis = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

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
     * @return Utilisateur
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return Utilisateur
     */
    public function setAdresse($adresse)
    {
        $this->adresse= $adresse;

        return $this;
    }

    /**
     * Get codePostale.
     *
     * @return string
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set codePostale.
     *
     * @param string $codePostale
     *
     * @return Utilisateur
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale= $codePostale;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return Utilisateur
     */
    public function setVille($ville)
    {
        $this->ville= $ville;

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
     * @param string $siret
     *
     * @return Utilisateur
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
     * Get devis
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDevis()
    {
        return $this->devis;
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
     * @return Utilisateur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

}