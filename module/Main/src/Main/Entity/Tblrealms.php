<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblrealms
 *
 * @ORM\Table(name="tblRealms", uniqueConstraints={@ORM\UniqueConstraint(name="strRealmKey_UNIQUE", columns={"strRealmKey"})}, indexes={@ORM\Index(name="fk_tblRealms_tblRealmTypes1_idx", columns={"intRealmTypeID"})})
 * @ORM\Entity
 */
class Tblrealms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intRealmID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intrealmid;

    /**
     * @var string
     *
     * @ORM\Column(name="strRealmKey", type="string", length=45, nullable=false)
     */
    private $strrealmkey;

    /**
     * @var string
     *
     * @ORM\Column(name="strRealmSecret", type="string", length=100, nullable=false)
     */
    private $strrealmsecret;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus = '1';

    /**
     * @var \Main\Entity\Tblrealmtypes
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblrealmtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intRealmTypeID", referencedColumnName="intRealmTypeID")
     * })
     */
    private $intrealmtypeid;



    /**
     * Get intrealmid
     *
     * @return integer 
     */
    public function getIntrealmid()
    {
        return $this->intrealmid;
    }

    /**
     * Set strrealmkey
     *
     * @param string $strrealmkey
     * @return Tblrealms
     */
    public function setStrrealmkey($strrealmkey)
    {
        $this->strrealmkey = $strrealmkey;

        return $this;
    }

    /**
     * Get strrealmkey
     *
     * @return string 
     */
    public function getStrrealmkey()
    {
        return $this->strrealmkey;
    }

    /**
     * Set strrealmsecret
     *
     * @param string $strrealmsecret
     * @return Tblrealms
     */
    public function setStrrealmsecret($strrealmsecret)
    {
        $this->strrealmsecret = $strrealmsecret;

        return $this;
    }

    /**
     * Get strrealmsecret
     *
     * @return string 
     */
    public function getStrrealmsecret()
    {
        return $this->strrealmsecret;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblrealms
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
     * Set intrealmtypeid
     *
     * @param \Main\Entity\Tblrealmtypes $intrealmtypeid
     * @return Tblrealms
     */
    public function setIntrealmtypeid(\Main\Entity\Tblrealmtypes $intrealmtypeid = null)
    {
        $this->intrealmtypeid = $intrealmtypeid;

        return $this;
    }

    /**
     * Get intrealmtypeid
     *
     * @return \Main\Entity\Tblrealmtypes 
     */
    public function getIntrealmtypeid()
    {
        return $this->intrealmtypeid;
    }
}
