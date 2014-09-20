<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcompany
 *
 * @ORM\Table(name="tblCompany", indexes={@ORM\Index(name="fk_tblCompany_tblCompanyType1_idx", columns={"intCompanyTypeID"})})
 * @ORM\Entity
 */
class Tblcompany
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCompanyID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcompanyid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intCompanyCategoryID", type="integer", nullable=true)
     */
    private $intcompanycategoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCompanyName", type="string", length=45, nullable=true)
     */
    private $strcompanyname;

    /**
     * @var string
     *
     * @ORM\Column(name="strTradeName", type="string", length=45, nullable=true)
     */
    private $strtradename;

    /**
     * @var string
     *
     * @ORM\Column(name="strWebsite", type="string", length=45, nullable=true)
     */
    private $strwebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="intCompanyStatusID", type="string", length=45, nullable=true)
     */
    private $intcompanystatusid;

    /**
     * @var string
     *
     * @ORM\Column(name="strTIN", type="string", length=45, nullable=true)
     */
    private $strtin;

    /**
     * @var \Security\Entity\Tblcompanytype
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblcompanytype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCompanyTypeID", referencedColumnName="intCompanyTypeID")
     * })
     */
    private $intcompanytypeid;



    /**
     * Get intcompanyid
     *
     * @return integer 
     */
    public function getIntcompanyid()
    {
        return $this->intcompanyid;
    }

    /**
     * Set intcompanycategoryid
     *
     * @param integer $intcompanycategoryid
     * @return Tblcompany
     */
    public function setIntcompanycategoryid($intcompanycategoryid)
    {
        $this->intcompanycategoryid = $intcompanycategoryid;

        return $this;
    }

    /**
     * Get intcompanycategoryid
     *
     * @return integer 
     */
    public function getIntcompanycategoryid()
    {
        return $this->intcompanycategoryid;
    }

    /**
     * Set strcompanyname
     *
     * @param string $strcompanyname
     * @return Tblcompany
     */
    public function setStrcompanyname($strcompanyname)
    {
        $this->strcompanyname = $strcompanyname;

        return $this;
    }

    /**
     * Get strcompanyname
     *
     * @return string 
     */
    public function getStrcompanyname()
    {
        return $this->strcompanyname;
    }

    /**
     * Set strtradename
     *
     * @param string $strtradename
     * @return Tblcompany
     */
    public function setStrtradename($strtradename)
    {
        $this->strtradename = $strtradename;

        return $this;
    }

    /**
     * Get strtradename
     *
     * @return string 
     */
    public function getStrtradename()
    {
        return $this->strtradename;
    }

    /**
     * Set strwebsite
     *
     * @param string $strwebsite
     * @return Tblcompany
     */
    public function setStrwebsite($strwebsite)
    {
        $this->strwebsite = $strwebsite;

        return $this;
    }

    /**
     * Get strwebsite
     *
     * @return string 
     */
    public function getStrwebsite()
    {
        return $this->strwebsite;
    }

    /**
     * Set intcompanystatusid
     *
     * @param string $intcompanystatusid
     * @return Tblcompany
     */
    public function setIntcompanystatusid($intcompanystatusid)
    {
        $this->intcompanystatusid = $intcompanystatusid;

        return $this;
    }

    /**
     * Get intcompanystatusid
     *
     * @return string 
     */
    public function getIntcompanystatusid()
    {
        return $this->intcompanystatusid;
    }

    /**
     * Set strtin
     *
     * @param string $strtin
     * @return Tblcompany
     */
    public function setStrtin($strtin)
    {
        $this->strtin = $strtin;

        return $this;
    }

    /**
     * Get strtin
     *
     * @return string 
     */
    public function getStrtin()
    {
        return $this->strtin;
    }

    /**
     * Set intcompanytypeid
     *
     * @param \Security\Entity\Tblcompanytype $intcompanytypeid
     * @return Tblcompany
     */
    public function setIntcompanytypeid(\Security\Entity\Tblcompanytype $intcompanytypeid = null)
    {
        $this->intcompanytypeid = $intcompanytypeid;

        return $this;
    }

    /**
     * Get intcompanytypeid
     *
     * @return \Security\Entity\Tblcompanytype 
     */
    public function getIntcompanytypeid()
    {
        return $this->intcompanytypeid;
    }
}
