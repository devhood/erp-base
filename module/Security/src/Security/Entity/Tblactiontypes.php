<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblactiontypes
 *
 * @ORM\Table(name="tblActionTypes")
 * @ORM\Entity
 */
class Tblactiontypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intActionTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intactiontypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="intActionTypeName", type="string", length=45, nullable=true)
     */
    private $intactiontypename;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus;



    /**
     * Get intactiontypeid
     *
     * @return integer 
     */
    public function getIntactiontypeid()
    {
        return $this->intactiontypeid;
    }

    /**
     * Set intactiontypename
     *
     * @param string $intactiontypename
     * @return Tblactiontypes
     */
    public function setIntactiontypename($intactiontypename)
    {
        $this->intactiontypename = $intactiontypename;

        return $this;
    }

    /**
     * Get intactiontypename
     *
     * @return string 
     */
    public function getIntactiontypename()
    {
        return $this->intactiontypename;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblactiontypes
     */
    public function setIntstatus($intstatus)
    {
        $this->intstatus = $intstatus;

        return $this;
    }

    /**
     * Get intstatus
     *
     * @return integer 
     */
    public function getIntstatus()
    {
        return $this->intstatus;
    }
}
