<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcustomers
 *
 * @ORM\Table(name="tblCustomers", indexes={@ORM\Index(name="fk_tblCustomers_tblCustomerType1_idx", columns={"intCustomerTypeID"}), @ORM\Index(name="fk_tblCustomers_tblCustomerCategory1_idx", columns={"intCustomerCategoryID"}), @ORM\Index(name="fk_tblCustomers_tblPerson2_idx", columns={"intOwnerID"}), @ORM\Index(name="fk_tblCustomers_tblPerson3_idx", columns={"intContactID"}), @ORM\Index(name="fk_tblCustomers_tblCustomerStatus1_idx", columns={"intCustomerStatusID"}), @ORM\Index(name="fk_tblCustomers_tblUsers1_idx", columns={"intSalesExecutiveID"}), @ORM\Index(name="fk_tblCustomers_tblPerson1_idx", columns={"intPersonID"}), @ORM\Index(name="fk_tblCustomers_tblCompany1", columns={"intCompanyID"})})
 * @ORM\Entity
 */
class Tblcustomers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCustomerID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcustomerid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intUnpaidInvoiceAllowed", type="integer", nullable=true)
     */
    private $intunpaidinvoiceallowed;

    /**
     * @var float
     *
     * @ORM\Column(name="fltCreditLimit", type="float", precision=10, scale=0, nullable=true)
     */
    private $fltcreditlimit;

    /**
     * @var \Main\Entity\Tblcompany
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblcompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCompanyID", referencedColumnName="intCompanyID")
     * })
     */
    private $intcompanyid;

    /**
     * @var \Main\Entity\Tblcustomercategory
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblcustomercategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCustomerCategoryID", referencedColumnName="intCustomerCategoryID")
     * })
     */
    private $intcustomercategoryid;

    /**
     * @var \Main\Entity\Tblcustomerstatus
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblcustomerstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCustomerStatusID", referencedColumnName="intCustomerStatusID")
     * })
     */
    private $intcustomerstatusid;

    /**
     * @var \Main\Entity\Tblcustomertype
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblcustomertype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCustomerTypeID", referencedColumnName="intCustomerTypeID")
     * })
     */
    private $intcustomertypeid;

    /**
     * @var \Main\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPersonID", referencedColumnName="intPersonID")
     * })
     */
    private $intpersonid;

    /**
     * @var \Main\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intOwnerID", referencedColumnName="intPersonID")
     * })
     */
    private $intownerid;

    /**
     * @var \Main\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intContactID", referencedColumnName="intPersonID")
     * })
     */
    private $intcontactid;

    /**
     * @var \Main\Entity\Tblusers
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblusers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intSalesExecutiveID", referencedColumnName="intUserID")
     * })
     */
    private $intsalesexecutiveid;



    /**
     * Get intcustomerid
     *
     * @return integer 
     */
    public function getIntcustomerid()
    {
        return $this->intcustomerid;
    }

    /**
     * Set intunpaidinvoiceallowed
     *
     * @param integer $intunpaidinvoiceallowed
     * @return Tblcustomers
     */
    public function setIntunpaidinvoiceallowed($intunpaidinvoiceallowed)
    {
        $this->intunpaidinvoiceallowed = $intunpaidinvoiceallowed;

        return $this;
    }

    /**
     * Get intunpaidinvoiceallowed
     *
     * @return integer 
     */
    public function getIntunpaidinvoiceallowed()
    {
        return $this->intunpaidinvoiceallowed;
    }

    /**
     * Set fltcreditlimit
     *
     * @param float $fltcreditlimit
     * @return Tblcustomers
     */
    public function setFltcreditlimit($fltcreditlimit)
    {
        $this->fltcreditlimit = $fltcreditlimit;

        return $this;
    }

    /**
     * Get fltcreditlimit
     *
     * @return float 
     */
    public function getFltcreditlimit()
    {
        return $this->fltcreditlimit;
    }

    /**
     * Set intcompanyid
     *
     * @param \Main\Entity\Tblcompany $intcompanyid
     * @return Tblcustomers
     */
    public function setIntcompanyid(\Main\Entity\Tblcompany $intcompanyid = null)
    {
        $this->intcompanyid = $intcompanyid;

        return $this;
    }

    /**
     * Get intcompanyid
     *
     * @return \Main\Entity\Tblcompany 
     */
    public function getIntcompanyid()
    {
        return $this->intcompanyid;
    }

    /**
     * Set intcustomercategoryid
     *
     * @param \Main\Entity\Tblcustomercategory $intcustomercategoryid
     * @return Tblcustomers
     */
    public function setIntcustomercategoryid(\Main\Entity\Tblcustomercategory $intcustomercategoryid = null)
    {
        $this->intcustomercategoryid = $intcustomercategoryid;

        return $this;
    }

    /**
     * Get intcustomercategoryid
     *
     * @return \Main\Entity\Tblcustomercategory 
     */
    public function getIntcustomercategoryid()
    {
        return $this->intcustomercategoryid;
    }

    /**
     * Set intcustomerstatusid
     *
     * @param \Main\Entity\Tblcustomerstatus $intcustomerstatusid
     * @return Tblcustomers
     */
    public function setIntcustomerstatusid(\Main\Entity\Tblcustomerstatus $intcustomerstatusid = null)
    {
        $this->intcustomerstatusid = $intcustomerstatusid;

        return $this;
    }

    /**
     * Get intcustomerstatusid
     *
     * @return \Main\Entity\Tblcustomerstatus 
     */
    public function getIntcustomerstatusid()
    {
        return $this->intcustomerstatusid;
    }

    /**
     * Set intcustomertypeid
     *
     * @param \Main\Entity\Tblcustomertype $intcustomertypeid
     * @return Tblcustomers
     */
    public function setIntcustomertypeid(\Main\Entity\Tblcustomertype $intcustomertypeid = null)
    {
        $this->intcustomertypeid = $intcustomertypeid;

        return $this;
    }

    /**
     * Get intcustomertypeid
     *
     * @return \Main\Entity\Tblcustomertype 
     */
    public function getIntcustomertypeid()
    {
        return $this->intcustomertypeid;
    }

    /**
     * Set intpersonid
     *
     * @param \Main\Entity\Tblperson $intpersonid
     * @return Tblcustomers
     */
    public function setIntpersonid(\Main\Entity\Tblperson $intpersonid = null)
    {
        $this->intpersonid = $intpersonid;

        return $this;
    }

    /**
     * Get intpersonid
     *
     * @return \Main\Entity\Tblperson 
     */
    public function getIntpersonid()
    {
        return $this->intpersonid;
    }

    /**
     * Set intownerid
     *
     * @param \Main\Entity\Tblperson $intownerid
     * @return Tblcustomers
     */
    public function setIntownerid(\Main\Entity\Tblperson $intownerid = null)
    {
        $this->intownerid = $intownerid;

        return $this;
    }

    /**
     * Get intownerid
     *
     * @return \Main\Entity\Tblperson 
     */
    public function getIntownerid()
    {
        return $this->intownerid;
    }

    /**
     * Set intcontactid
     *
     * @param \Main\Entity\Tblperson $intcontactid
     * @return Tblcustomers
     */
    public function setIntcontactid(\Main\Entity\Tblperson $intcontactid = null)
    {
        $this->intcontactid = $intcontactid;

        return $this;
    }

    /**
     * Get intcontactid
     *
     * @return \Main\Entity\Tblperson 
     */
    public function getIntcontactid()
    {
        return $this->intcontactid;
    }

    /**
     * Set intsalesexecutiveid
     *
     * @param \Main\Entity\Tblusers $intsalesexecutiveid
     * @return Tblcustomers
     */
    public function setIntsalesexecutiveid(\Main\Entity\Tblusers $intsalesexecutiveid = null)
    {
        $this->intsalesexecutiveid = $intsalesexecutiveid;

        return $this;
    }

    /**
     * Get intsalesexecutiveid
     *
     * @return \Main\Entity\Tblusers 
     */
    public function getIntsalesexecutiveid()
    {
        return $this->intsalesexecutiveid;
    }
}
