<?php

namespace PortPontrieuxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emplacement
 *
 * @ORM\Table(name="emplacement")
 * @ORM\Entity(repositoryClass="PortPontrieuxBundle\Repository\EmplacementRepository")
 */
class Emplacement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;
 /**
     * @ORM\ManyToOne(targetEntity="PortPontrieuxBundle\Entity\Type")
	 *  @ORM\JoinColumn(nullable=false)
     */
    private $type;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set disponible
     *
     * @param boolean $disponible
     *
     * @return Emplacement
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return bool
     */
    public function getDisponible()
    {
        return $this->disponible;
    }
}

