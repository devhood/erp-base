<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblprocess
 *
 * @ORM\Table(name="tblProcess", indexes={@ORM\Index(name="fk_tblProcess_tblModules1_idx", columns={"intModuleID"})})
 * @ORM\Entity
 */
class Tblprocess
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProcessID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intprocessid;

    /**
     * @var string
     *
     * @ORM\Column(name="intProcessName", type="string", length=45, nullable=false)
     */
    private $intprocessname;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus;

    /**
     * @var \Main\Entity\Tblmodules
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Main\Entity\Tblmodules")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intModuleID", referencedColumnName="intModuleID")
     * })
     */
    private $intmoduleid;



    /**
     * Set intprocessid
     *
     * @param integer $intprocessid
     * @return Tblprocess
     */
    public function setIntprocessid($intprocessid)
    {
        $this->intprocessid = $intprocessid;

        return $this;
    }

    /**
     * Get intprocessid
     *
     * @return integer 
     */
    public function getIntprocessid()
    {
        return $this->intprocessid;
    }

    /**
     * Set intprocessname
     *
     * @param string $intprocessname
     * @return Tblprocess
     */
    public function setIntprocessname($intprocessname)
    {
        $this->intprocessname = $intprocessname;

        return $this;
    }

    /**
     * Get intprocessname
     *
     * @return string 
     */
    public function getIntprocessname()
    {
        return $this->intprocessname;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblprocess
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
     * Set intmoduleid
     *
     * @param \Main\Entity\Tblmodules $intmoduleid
     * @return Tblprocess
     */
    public function setIntmoduleid(\Main\Entity\Tblmodules $intmoduleid)
    {
        $this->intmoduleid = $intmoduleid;

        return $this;
    }

    /**
     * Get intmoduleid
     *
     * @return \Main\Entity\Tblmodules 
     */
    public function getIntmoduleid()
    {
        return $this->intmoduleid;
    }
}
