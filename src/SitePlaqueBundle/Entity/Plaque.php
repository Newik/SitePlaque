<?php

/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 26/03/2016
 * Time: 15:49
 */

namespace SitePlaqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Plaque
 *
 * @ORM\Table(name="plaque", indexes={@ORM\Index(name="index_devis_id", columns={"devis_id"})}, indexes={@ORM\Index(name="index_client_id", columns={"client_id"})})
 * @ORM\Entity(repositoryClass="SitePlaqueBundle\Repository\PlaqueRepository")
 *
 */
class Plaque
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
     * @ORM\Column(name="nom", type="string", nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="taille", type="float", nullable=false)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="image_visuel", type="string", nullable=false)
     */
    private $imageVisuel;

    /**
     * @var float
     *
     * @ORM\Column(name="taille_marquage", type="float", nullable=false)
     */
    private $tailleMarquage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_trous", type="integer", nullable=false)
     */
    private $nombreTrous;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_couleurs", type="integer", nullable=false)
     */
    private $nombreCouleurs;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string", nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="image_produit", type="string", nullable=false)
     */
    private $imageProduit;

    /**
     * @var Client $client
     *
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="id", cascade={"persist", "remove", "merge"})
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id", nullable=false)
     *
     */
    public $client;

    /**
     * @var Devis $devis
     *
     * @ORM\ManyToOne(targetEntity="Devis", inversedBy="id", cascade={"persist", "remove", "merge"})
     * @ORM\JoinColumn(name="devis_id", referencedColumnName="id", nullable=false)
     *
     */
    public $devis;

    /**
     * Constructor.
     */
    public function __construct()
    {


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
     * @return Plaque
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get taille.
     *
     * @return float
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set taille.
     *
     * @param float $taille
     *
     * @return Plaque
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get imageVisuel.
     *
     * @return string
     */
    public function getImageVisuel()
    {
        return $this->imageVisuel;
    }

    /**
     * Set imageVisuel.
     *
     * @param string $imageVisuel
     *
     * @return Plaque
     */
    public function setImageVisuel($imageVisuel)
    {
        $this->imageVisuel = $imageVisuel;

        return $this;
    }

    /**
     * Get tailleMarquage.
     *
     * @return float
     */
    public function getTailleMarquage()
    {
        return $this->tailleMarquage;
    }

    /**
     * Set tailleMarquage.
     *
     * @param float $tailleMarquage
     *
     * @return Plaque
     */
    public function setTailleMarquage($tailleMarquage)
    {
        $this->tailleMarquage = $tailleMarquage;

        return $this;
    }

    /**
     * Get nombreTrous.
     *
     * @return integer
     */
    public function getNombreTrous()
    {
        return $this->taille;
    }

    /**
     * Set nombreTrous.
     *
     * @param integer $nombreTrous
     *
     * @return Plaque
     */
    public function setNombreTrous($nombreTrous)
    {
        $this->nombreTrous = $nombreTrous;

        return $this;
    }

    /**
     * Get nombreCouleurs.
     *
     * @return integer
     */
    public function getNombreCouleurs()
    {
        return $this->taille;
    }

    /**
     * Set nombreCouleurs.
     *
     * @param integer $nombreCouleurs
     *
     * @return Plaque
     */
    public function setNombreCouleurs($nombreCouleurs)
    {
        $this->nombreCouleurs = $nombreCouleurs;

        return $this;
    }

    /**
     * Get dateCreation.
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateCreation.
     *
     * @param string $dateCreation
     *
     * @return Plaque
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get imageProduit.
     *
     * @return string
     */
    public function getImageProduit()
    {
        return $this->imageProduit;
    }

    /**
     * Set imageProduit.
     *
     * @param string $imageProduit
     *
     * @return Plaque
     */
    public function setImageProduit($imageProduit)
    {
        $this->imageProduit = $imageProduit;

        return $this;
    }

    /**
     * Get client
     *
     * @return \SitePlaqueBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Get devis
     *
     * @return \SitePlaqueBundle\Entity\Devis
     */
    public function getDevis()
    {
        return $this->devis;
    }


}