<?php

namespace Security\Entity;

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
     * @var \Security\Entity\Tblcompany
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblcompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCompanyID", referencedColumnName="intCompanyID")
     * })
     */
    private $intcompanyid;

    /**
     * @var \Security\Entity\Tblcustomercategory
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblcustomercategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCustomerCategoryID", referencedColumnName="intCustomerCategoryID")
     * })
     */
    private $intcustomercategoryid;

    /**
     * @var \Security\Entity\Tblcustomerstatus
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblcustomerstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCustomerStatusID", referencedColumnName="intCustomerStatusID")
     * })
     */
    private $intcustomerstatusid;

    /**
     * @var \Security\Entity\Tblcustomertype
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblcustomertype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCustomerTypeID", referencedColumnName="intCustomerTypeID")
     * })
     */
    private $intcustomertypeid;

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
     * @var \Security\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intOwnerID", referencedColumnName="intPersonID")
     * })
     */
    private $intownerid;

    /**
     * @var \Security\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intContactID", referencedColumnName="intPersonID")
     * })
     */
    private $intcontactid;

    /**
     * @var \Security\Entity\Tblusers
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblusers")
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
     * @param \Security\Entity\Tblcompany $intcompanyid
     * @return Tblcustomers
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
     * Set intcustomercategoryid
     *
     * @param \Security\Entity\Tblcustomercategory $intcustomercategoryid
     * @return Tblcustomers
     */
    public function setIntcustomercategoryid(\Security\Entity\Tblcustomercategory $intcustomercategoryid = null)
    {
        $this->intcustomercategoryid = $intcustomercategoryid;

        return $this;
    }

    /**
     * Get intcustomercategoryid
     *
     * @return \Security\Entity\Tblcustomercategory 
     */
    public function getIntcustomercategoryid()
    {
        return $this->intcustomercategoryid;
    }

    /**
     * Set intcustomerstatusid
     *
     * @param \Security\Entity\Tblcustomerstatus $intcustomerstatusid
     * @return Tblcustomers
     */
    public function setIntcustomerstatusid(\Security\Entity\Tblcustomerstatus $intcustomerstatusid = null)
    {
        $this->intcustomerstatusid = $intcustomerstatusid;

        return $this;
    }

    /**
     * Get intcustomerstatusid
     *
     * @return \Security\Entity\Tblcustomerstatus 
     */
    public function getIntcustomerstatusid()
    {
        return $this->intcustomerstatusid;
    }

    /**
     * Set intcustomertypeid
     *
     * @param \Security\Entity\Tblcustomertype $intcustomertypeid
     * @return Tblcustomers
     */
    public function setIntcustomertypeid(\Security\Entity\Tblcustomertype $intcustomertypeid = null)
    {
        $this->intcustomertypeid = $intcustomertypeid;

        return $this;
    }

    /**
     * Get intcustomertypeid
     *
     * @return \Security\Entity\Tblcustomertype 
     */
    public function getIntcustomertypeid()
    {
        return $this->intcustomertypeid;
    }

    /**
     * Set intpersonid
     *
     * @param \Security\Entity\Tblperson $intpersonid
     * @return Tblcustomers
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

    /**
     * Set intownerid
     *
     * @param \Security\Entity\Tblperson $intownerid
     * @return Tblcustomers
     */
    public function setIntownerid(\Security\Entity\Tblperson $intownerid = null)
    {
        $this->intownerid = $intownerid;

        return $this;
    }

    /**
     * Get intownerid
     *
     * @return \Security\Entity\Tblperson 
     */
    public function getIntownerid()
    {
        return $this->intownerid;
    }

    /**
     * Set intcontactid
     *
     * @param \Security\Entity\Tblperson $intcontactid
     * @return Tblcustomers
     */
    public function setIntcontactid(\Security\Entity\Tblperson $intcontactid = null)
    {
        $this->intcontactid = $intcontactid;

        return $this;
    }

    /**
     * Get intcontactid
     *
     * @return \Security\Entity\Tblperson 
     */
    public function getIntcontactid()
    {
        return $this->intcontactid;
    }

    /**
     * Set intsalesexecutiveid
     *
     * @param \Security\Entity\Tblusers $intsalesexecutiveid
     * @return Tblcustomers
     */
    public function setIntsalesexecutiveid(\Security\Entity\Tblusers $intsalesexecutiveid = null)
    {
        $this->intsalesexecutiveid = $intsalesexecutiveid;

        return $this;
    }

    /**
     * Get intsalesexecutiveid
     *
     * @return \Security\Entity\Tblusers 
     */
    public function getIntsalesexecutiveid()
    {
        return $this->intsalesexecutiveid;
    }
}
