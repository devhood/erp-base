<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblinventorylocation
 *
 * @ORM\Table(name="tblInventoryLocation", indexes={@ORM\Index(name="fk_tblInventoryLocation_tblLocationTypes1_idx", columns={"intLocationTypeID"}), @ORM\Index(name="fk_tblInventoryLocation_tblCompany1_idx", columns={"intCompanyID"}), @ORM\Index(name="fk_tblInventoryLocation_tblPerson1_idx", columns={"intPersonID"})})
 * @ORM\Entity
 */
class Tblinventorylocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intLocationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intlocationid;

    /**
     * @var string
     *
     * @ORM\Column(name="strLocationName", type="string", length=100, nullable=true)
     */
    private $strlocationname;

    /**
     * @var \Security\Entity\Tblcompany
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblcompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCompanyID", referencedColumnName="intCompanyID")
     * })
     */
    private $intcompanyid;

    /**
     * @var \Security\Entity\Tbllocationtypes
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tbllocationtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intLocationTypeID", referencedColumnName="intLocationTypeID")
     * })
     */
    private $intlocationtypeid;

    /**
     * @var \Security\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPersonID", referencedColumnName="intPersonID")
     * })
     */
    private $intpersonid;



    /**
     * Get intlocationid
     *
     * @return integer 
     */
    public function getIntlocationid()
    {
        return $this->intlocationid;
    }

    /**
     * Set strlocationname
     *
     * @param string $strlocationname
     * @return Tblinventorylocation
     */
    public function setStrlocationname($strlocationname)
    {
        $this->strlocationname = $strlocationname;

        return $this;
    }

    /**
     * Get strlocationname
     *
     * @return string 
     */
    public function getStrlocationname()
    {
        return $this->strlocationname;
    }

    /**
     * Set intcompanyid
     *
     * @param \Security\Entity\Tblcompany $intcompanyid
     * @return Tblinventorylocation
     */
    public function setIntcompanyid(\Security\Entity\Tblcompany $intcompanyid = null)
    {
        $this->intcompanyid = $intcompanyid;

        return $this;
    }

    /**
     * Get intcompanyid
     *
     * @return \Security\Entity\Tblcompany 
     */
    public function getIntcompanyid()
    {
        return $this->intcompanyid;
    }

    /**
     * Set intlocationtypeid
     *
     * @param \Security\Entity\Tbllocationtypes $intlocationtypeid
     * @return Tblinventorylocation
     */
    public function setIntlocationtypeid(\Security\Entity\Tbllocationtypes $intlocationtypeid = null)
    {
        $this->intlocationtypeid = $intlocationtypeid;

        return $this;
    }

    /**
     * Get intlocationtypeid
     *
     * @return \Security\Entity\Tbllocationtypes 
     */
    public function getIntlocationtypeid()
    {
        return $this->intlocationtypeid;
    }

    /**
     * Set intpersonid
     *
     * @param \Security\Entity\Tblperson $intpersonid
     * @return Tblinventorylocation
     */
    public function setIntpersonid(\Security\Entity\Tblperson $intpersonid = null)
    {
        $this->intpersonid = $intpersonid;

        return $this;
    }

    /**
     * Get intpersonid
     *
     * @return \Security\Entity\Tblperson 
     */
    public function getIntpersonid()
    {
        return $this->intpersonid;
    }
}
