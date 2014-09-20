<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblmodules
 *
 * @ORM\Table(name="tblModules", indexes={@ORM\Index(name="fk_tblModules_tblRealms1_idx", columns={"intRealmID"})})
 * @ORM\Entity
 */
class Tblmodules
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intModuleID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intmoduleid;

    /**
     * @var string
     *
     * @ORM\Column(name="strModuleName", type="string", length=45, nullable=true)
     */
    private $strmodulename;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus;

    /**
     * @var \Security\Entity\Tblrealms
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblrealms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intRealmID", referencedColumnName="intRealmID")
     * })
     */
    private $intrealmid;



    /**
     * Get intmoduleid
     *
     * @return integer 
     */
    public function getIntmoduleid()
    {
        return $this->intmoduleid;
    }

    /**
     * Set strmodulename
     *
     * @param string $strmodulename
     * @return Tblmodules
     */
    public function setStrmodulename($strmodulename)
    {
        $this->strmodulename = $strmodulename;

        return $this;
    }

    /**
     * Get strmodulename
     *
     * @return string 
     */
    public function getStrmodulename()
    {
        return $this->strmodulename;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblmodules
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
     * Set intrealmid
     *
     * @param \Security\Entity\Tblrealms $intrealmid
     * @return Tblmodules
     */
    public function setIntrealmid(\Security\Entity\Tblrealms $intrealmid = null)
    {
        $this->intrealmid = $intrealmid;

        return $this;
    }

    /**
     * Get intrealmid
     *
     * @return \Security\Entity\Tblrealms 
     */
    public function getIntrealmid()
    {
        return $this->intrealmid;
    }
}
