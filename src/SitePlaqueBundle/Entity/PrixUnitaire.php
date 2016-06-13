<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 31/03/2016
 * Time: 13:46
 */

namespace SitePlaqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * PrixUnitaire
 *
 * @ORM\Table(name="prix_unitaire")
 * @ORM\Entity(repositoryClass="SitePlaqueBundle\Repository\PrixUnitaireRepository")
 *
 */

class PrixUnitaire
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
     * @ORM\Column(name="libelle", type="string", nullable=false)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", nullable=false)
     */
    private $prix;


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
     * Get libelle.
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set libelle.
     *
     * @param string $libelle
     *
     * @return PrixUnitaire
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set prix.
     *
     * @param float $prix
     *
     * @return PrixUnitaire
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}