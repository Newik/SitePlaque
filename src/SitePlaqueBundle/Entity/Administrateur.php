<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 29/03/2016
 * Time: 16:11
 */

namespace SitePlaqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="Administrateur")
 * @ORM\Entity(repositoryClass="SitePlaqueBundle\Repository\AdministrateurRepository")
 *
 */

class Administrateur extends Utilisateur
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}