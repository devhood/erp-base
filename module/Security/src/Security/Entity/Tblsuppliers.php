<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsuppliers
 *
 * @ORM\Table(name="tblSuppliers", uniqueConstraints={@ORM\UniqueConstraint(name="intCompanyID_UNIQUE", columns={"intCompanyID"})}, indexes={@ORM\Index(name="fk_tblSuppliers_tblSupplierStatus1_idx", columns={"intSupplierStatusID"}), @ORM\Index(name="fk_tblSuppliers_tblPerson1_idx", columns={"intPersonID"})})
 * @ORM\Entity
 */
class Tblsuppliers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intSupplierID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intsupplierid;

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
     * @var \Security\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPersonID", referencedColumnName="intPersonID")
     * })
     */
    private $intpersonid;

    /**
     * @var \Security\Entity\Tblsupplierstatus
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblsupplierstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intSupplierStatusID", referencedColumnName="intSupplierStatusID")
     * })
     */
    private $intsupplierstatusid;



    /**
     * Get intsupplierid
     *
     * @return integer 
     */
    public function getIntsupplierid()
    {
        return $this->intsupplierid;
    }

    /**
     * Set intcompanyid
     *
     * @param \Security\Entity\Tblcompany $intcompanyid
     * @return Tblsuppliers
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
     * Set intpersonid
     *
     * @param \Security\Entity\Tblperson $intpersonid
     * @return Tblsuppliers
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
     * Set intsupplierstatusid
     *
     * @param \Security\Entity\Tblsupplierstatus $intsupplierstatusid
     * @return Tblsuppliers
     */
    public function setIntsupplierstatusid(\Security\Entity\Tblsupplierstatus $intsupplierstatusid = null)
    {
        $this->intsupplierstatusid = $intsupplierstatusid;

        return $this;
    }

    /**
     * Get intsupplierstatusid
     *
     * @return \Security\Entity\Tblsupplierstatus 
     */
    public function getIntsupplierstatusid()
    {
        return $this->intsupplierstatusid;
    }
}
