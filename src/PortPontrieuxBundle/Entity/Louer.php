<?php

namespace pontrieuxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Louer
 *
 * @ORM\Table(name="louer")
 * @ORM\Entity(repositoryClass="pontrieuxBundle\Repository\LouerRepository")
 */
class Louer
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
     * @ORM/ManyToOne(TargetEntity = "pontrieuxBundle\Entity\Emplacement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emplacement;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

