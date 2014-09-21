<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblactions
 *
 * @ORM\Table(name="tblActions", indexes={@ORM\Index(name="fk_tblActions_tblProcess1_idx", columns={"intProcessID"}), @ORM\Index(name="fk_tblActions_tblActionTypes1_idx", columns={"intActionTypeID"})})
 * @ORM\Entity
 */
class Tblactions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intActionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intactionid;

    /**
     * @var string
     *
     * @ORM\Column(name="strActionName", type="string", length=45, nullable=false)
     */
    private $stractionname;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus;

    /**
     * @var \Main\Entity\Tblactiontypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Main\Entity\Tblactiontypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intActionTypeID", referencedColumnName="intActionTypeID")
     * })
     */
    private $intactiontypeid;

    /**
     * @var \Main\Entity\Tblprocess
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Main\Entity\Tblprocess")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intProcessID", referencedColumnName="intProcessID")
     * })
     */
    private $intprocessid;



    /**
     * Set intactionid
     *
     * @param integer $intactionid
     * @return Tblactions
     */
    public function setIntactionid($intactionid)
    {
        $this->intactionid = $intactionid;

        return $this;
    }

    /**
     * Get intactionid
     *
     * @return integer 
     */
    public function getIntactionid()
    {
        return $this->intactionid;
    }

    /**
     * Set stractionname
     *
     * @param string $stractionname
     * @return Tblactions
     */
    public function setStractionname($stractionname)
    {
        $this->stractionname = $stractionname;

        return $this;
    }

    /**
     * Get stractionname
     *
     * @return string 
     */
    public function getStractionname()
    {
        return $this->stractionname;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblactions
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

    /**
     * Set intactiontypeid
     *
     * @param \Main\Entity\Tblactiontypes $intactiontypeid
     * @return Tblactions
     */
    public function setIntactiontypeid(\Main\Entity\Tblactiontypes $intactiontypeid)
    {
        $this->intactiontypeid = $intactiontypeid;

        return $this;
    }

    /**
     * Get intactiontypeid
     *
     * @return \Main\Entity\Tblactiontypes 
     */
    public function getIntactiontypeid()
    {
        return $this->intactiontypeid;
    }

    /**
     * Set intprocessid
     *
     * @param \Main\Entity\Tblprocess $intprocessid
     * @return Tblactions
     */
    public function setIntprocessid(\Main\Entity\Tblprocess $intprocessid)
    {
        $this->intprocessid = $intprocessid;

        return $this;
    }

    /**
     * Get intprocessid
     *
     * @return \Main\Entity\Tblprocess 
     */
    public function getIntprocessid()
    {
        return $this->intprocessid;
    }
}
