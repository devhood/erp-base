<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproducts
 *
 * @ORM\Table(name="tblProducts", uniqueConstraints={@ORM\UniqueConstraint(name="strProductCode_UNIQUE", columns={"strProductCode"})}, indexes={@ORM\Index(name="fk_tblProducts_tblProductClassification1_idx", columns={"intProductClassificationID"}), @ORM\Index(name="fk_tblProducts_tblBrands1_idx", columns={"intBrandID"}), @ORM\Index(name="fk_tblProducts_tblSuppliers1_idx", columns={"intSupplierID"}), @ORM\Index(name="fk_tblProducts_tblUOM1_idx", columns={"intUOMID"}), @ORM\Index(name="fk_tblProducts_tblProductStatus1_idx", columns={"intProductStatusID"})})
 * @ORM\Entity
 */
class Tblproducts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProductID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intproductid;

    /**
     * @var string
     *
     * @ORM\Column(name="strProductCode", type="string", length=100, nullable=false)
     */
    private $strproductcode;

    /**
     * @var string
     *
     * @ORM\Column(name="strProductName", type="string", length=250, nullable=true)
     */
    private $strproductname;

    /**
     * @var string
     *
     * @ORM\Column(name="strDescription", type="string", length=250, nullable=true)
     */
    private $strdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="strColor", type="string", length=45, nullable=true)
     */
    private $strcolor;

    /**
     * @var string
     *
     * @ORM\Column(name="strSize", type="string", length=45, nullable=true)
     */
    private $strsize;

    /**
     * @var string
     *
     * @ORM\Column(name="strWeight", type="string", length=45, nullable=true)
     */
    private $strweight;

    /**
     * @var \Security\Entity\Tblbrands
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblbrands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intBrandID", referencedColumnName="intBrandID")
     * })
     */
    private $intbrandid;

    /**
     * @var \Security\Entity\Tblproductclassification
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblproductclassification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intProductClassificationID", referencedColumnName="intProductClassificationID")
     * })
     */
    private $intproductclassificationid;

    /**
     * @var \Security\Entity\Tblproductstatus
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblproductstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intProductStatusID", referencedColumnName="intProductStatusID")
     * })
     */
    private $intproductstatusid;

    /**
     * @var \Security\Entity\Tblsuppliers
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblsuppliers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intSupplierID", referencedColumnName="intSupplierID")
     * })
     */
    private $intsupplierid;

    /**
     * @var \Security\Entity\Tbluom
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tbluom")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intUOMID", referencedColumnName="intUOMID")
     * })
     */
    private $intuomid;



    /**
     * Get intproductid
     *
     * @return integer 
     */
    public function getIntproductid()
    {
        return $this->intproductid;
    }

    /**
     * Set strproductcode
     *
     * @param string $strproductcode
     * @return Tblproducts
     */
    public function setStrproductcode($strproductcode)
    {
        $this->strproductcode = $strproductcode;

        return $this;
    }

    /**
     * Get strproductcode
     *
     * @return string 
     */
    public function getStrproductcode()
    {
        return $this->strproductcode;
    }

    /**
     * Set strproductname
     *
     * @param string $strproductname
     * @return Tblproducts
     */
    public function setStrproductname($strproductname)
    {
        $this->strproductname = $strproductname;

        return $this;
    }

    /**
     * Get strproductname
     *
     * @return string 
     */
    public function getStrproductname()
    {
        return $this->strproductname;
    }

    /**
     * Set strdescription
     *
     * @param string $strdescription
     * @return Tblproducts
     */
    public function setStrdescription($strdescription)
    {
        $this->strdescription = $strdescription;

        return $this;
    }

    /**
     * Get strdescription
     *
     * @return string 
     */
    public function getStrdescription()
    {
        return $this->strdescription;
    }

    /**
     * Set strcolor
     *
     * @param string $strcolor
     * @return Tblproducts
     */
    public function setStrcolor($strcolor)
    {
        $this->strcolor = $strcolor;

        return $this;
    }

    /**
     * Get strcolor
     *
     * @return string 
     */
    public function getStrcolor()
    {
        return $this->strcolor;
    }

    /**
     * Set strsize
     *
     * @param string $strsize
     * @return Tblproducts
     */
    public function setStrsize($strsize)
    {
        $this->strsize = $strsize;

        return $this;
    }

    /**
     * Get strsize
     *
     * @return string 
     */
    public function getStrsize()
    {
        return $this->strsize;
    }

    /**
     * Set strweight
     *
     * @param string $strweight
     * @return Tblproducts
     */
    public function setStrweight($strweight)
    {
        $this->strweight = $strweight;

        return $this;
    }

    /**
     * Get strweight
     *
     * @return string 
     */
    public function getStrweight()
    {
        return $this->strweight;
    }

    /**
     * Set intbrandid
     *
     * @param \Security\Entity\Tblbrands $intbrandid
     * @return Tblproducts
     */
    public function setIntbrandid(\Security\Entity\Tblbrands $intbrandid = null)
    {
        $this->intbrandid = $intbrandid;

        return $this;
    }

    /**
     * Get intbrandid
     *
     * @return \Security\Entity\Tblbrands 
     */
    public function getIntbrandid()
    {
        return $this->intbrandid;
    }

    /**
     * Set intproductclassificationid
     *
     * @param \Security\Entity\Tblproductclassification $intproductclassificationid
     * @return Tblproducts
     */
    public function setIntproductclassificationid(\Security\Entity\Tblproductclassification $intproductclassificationid = null)
    {
        $this->intproductclassificationid = $intproductclassificationid;

        return $this;
    }

    /**
     * Get intproductclassificationid
     *
     * @return \Security\Entity\Tblproductclassification 
     */
    public function getIntproductclassificationid()
    {
        return $this->intproductclassificationid;
    }

    /**
     * Set intproductstatusid
     *
     * @param \Security\Entity\Tblproductstatus $intproductstatusid
     * @return Tblproducts
     */
    public function setIntproductstatusid(\Security\Entity\Tblproductstatus $intproductstatusid = null)
    {
        $this->intproductstatusid = $intproductstatusid;

        return $this;
    }

    /**
     * Get intproductstatusid
     *
     * @return \Security\Entity\Tblproductstatus 
     */
    public function getIntproductstatusid()
    {
        return $this->intproductstatusid;
    }

    /**
     * Set intsupplierid
     *
     * @param \Security\Entity\Tblsuppliers $intsupplierid
     * @return Tblproducts
     */
    public function setIntsupplierid(\Security\Entity\Tblsuppliers $intsupplierid = null)
    {
        $this->intsupplierid = $intsupplierid;

        return $this;
    }

    /**
     * Get intsupplierid
     *
     * @return \Security\Entity\Tblsuppliers 
     */
    public function getIntsupplierid()
    {
        return $this->intsupplierid;
    }

    /**
     * Set intuomid
     *
     * @param \Security\Entity\Tbluom $intuomid
     * @return Tblproducts
     */
    public function setIntuomid(\Security\Entity\Tbluom $intuomid = null)
    {
        $this->intuomid = $intuomid;

        return $this;
    }

    /**
     * Get intuomid
     *
     * @return \Security\Entity\Tbluom 
     */
    public function getIntuomid()
    {
        return $this->intuomid;
    }
}
